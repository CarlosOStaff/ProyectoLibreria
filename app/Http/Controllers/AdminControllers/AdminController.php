<?php

namespace App\Http\Controllers\AdminControllers;

use App\Exports\CategoriaExport;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

require 'C:\laragon\www\prueba\ProyectoPrueba\vendor\autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
            if ($user->rol_id === 1) {
                $libros = DB::select('SELECT count(id) FROM books;');
                $libros = reset($libros);

                $users = DB::select('SELECT count(id) FROM users WHERE rol_id = 2 
                        AND email_verified_at IS NOT NULL;');
                $users = reset($users);

                $librosPRestados = DB::select('SELECT COUNT(id) FROM loans');
                $librosPRestados = reset($librosPRestados);
                return view('U_Admin.index', compact('user'))->with('users', $users)->with('libros', $libros)->with('users', $users)->with('librosPRestados', $librosPRestados);
            }
        
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function edit()
    {
        $user = auth()->user();
        if (isset($user)) {
            $query = DB::select(
                'SELECT s.img_perfil,s.id, s.nombre, s.apellido, s.ciudad_id, s.email,c.id, c.nombre_ciudad 
                    FROM users s
                    JOIN cities c
                    ON s.ciudad_id = c.id
                    WHERE s.id = (:id)
                    AND s.rol_id = (:rol_id)',
                ['id' => $user->id, 'rol_id' => $user->rol_id]
            );
            $ciudades = DB::select('SELECT * FROM cities;');
            if ($query) {
                return view('U_Admin.admin_cuenta')->with('admin', $query)->with('ciudades', $ciudades);
            }
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function update(Request $request)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $ciudadId = intval($request->ciudad_id);

                if ($request->hasFile('img_perfil')) {
                    // Obtener la imagen actual
                    $currentImage = $user->img_perfil;

                    // Guardar la nueva imagen
                    $file = $request->img_perfil;
                    $nombreimagen = \Str::slug($request->nombre) . "_" . $request->apellido . "_" . $user->id . "." . $file->guessExtension();
                    $ruta = public_path('/img/users/perfil/');

                    // Eliminar la imagen anterior si existe
                    if ($currentImage && file_exists($ruta . $currentImage)) {
                        unlink($ruta . $currentImage);
                    }
                    // Guardar la nueva imagen
                    $file->move($ruta, $nombreimagen);

                    $newImage = $nombreimagen;
                } else {
                    $newImage = $user->img_perfil;
                }

                // Actualizar el usuario en la base de datos
                DB::update(
                    'UPDATE users 
                        SET img_perfil = (:img_perfil), nombre = (:nombre), 
                        apellido = (:apellido), ciudad_id = (:ciudad_id), 
                        email = (:email)
                        WHERE id = (:id)',
                    [
                        'img_perfil' => $newImage,
                        'nombre' => $request->nombre,
                        'apellido' => $request->apellido,
                        'ciudad_id' => $ciudadId,
                        'email' => $request->email,
                        'id' => $user->id
                    ]
                );
                return redirect('/admin/edit')->with('message_udate_admin','Tus datos han sido actualizados correctamente');
            }
            return 'no eres administrador';
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function newAdmin()
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $ciudades = DB::select('SELECT * FROM cities;');
                return view('U_Admin.registro_nuevo_admin')->with('ciudades', $ciudades);
            }
        }
        return redirect('inicio_session')->with('login_error', 'no tienes permisos para acceder a esta ruta');
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($request->hasFile('img_perfil')) {
                $file = $request->img_perfil;
                $nombreimagen = \Str::slug($request->nombre) . "_" . "$request->apellido" . "." . $file->guessExtension();
                $ruta = public_path('/img/users/perfil/');
                copy($file->getRealPath(), $ruta . $nombreimagen);
                $file->img_perfil = $nombreimagen;
            }
            $email = DB::select('SELECT * FROM users WHERE email =(:email)', ['email' => $request->email]);
            if (empty($email)) {
                $userId = DB::table('users')->insertGetId([
                    'rol_id' => 1,
                    'img_perfil' => $file->img_perfil = $nombreimagen,
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'ciudad_id' => $request->ciudad_id,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);
                $idEncrypt = base64_encode($userId);
                $mail = new PHPMailer();
                try {
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'carlos.ovando@staffbridge.com.mx';
                    $mail->Password = 'ravk gxlu tgov upyt'; // Actualiza con la contraseña correcta
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;
                    $mail->setFrom('carlos.ovando@staffbridge.com.mx', 'Carlos Ivan Ovando Toledo');
                    $mail->addAddress($request->email, $request->nombre);
                    $mail->isHTML(true);
                    $mail->Subject = 'Verificacion de cuenta';
                    $mail->Body = '<div style="max-width:100%; width:80%; margin:auto; padding:2vw; font-family: Arial, sans-serif; background-color: #f9f9f9; border:0.2vw solid #ddd;">
                                        <h3 style="font-style:italic; font-weight:bold; color:black;">Hola, este es un correo generado para la verificación de tu cuenta en nuestra librería.</h3>
                                        <p style="font-style:italic; color: #555;">Sigue los pasos a continuación.</p>
                                        <p style="color: #555;">Haz clic en el siguiente enlace:</p>
                                        <a href="' . url('/validar/correo/' . $idEncrypt) . '" style="display: inline-block; padding: 1vw 1.5vw; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Confirmar cuenta</a>
                                    </div>';
                    $mail->send();
                    return redirect('/registro/admin')->with('message_admin_ok', 'Usuario creado con exito, verifique su cuenta por correo');
                } catch (Exception $e) {
                    return response()->json(['message' => $e->getMessage()]);
                }
            }
            return redirect('/registro/admin')->with('message_error_register', 'El correo ya existe');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function listAdmin()
    {
        $user = auth()->user();
        if (isset($user)) {

            $admins = DB::select(
                'SELECT  u.img_perfil,u.id,u.nombre,
                        u.apellido,u.email_verified_at
                        FROM users u
                        JOIN cities c
                        ON u.ciudad_id = c.id
                        WHERE rol_id = 1
                        AND u.id != (:admin_id)',
                [
                    'admin_id' => $user->id,
                ]
            );
            return view('U_Admin.lista_administradores')->with('admins', $admins);
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function destroy($id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $deleteResult = DB::delete(
                    'DELETE FROM users 
                            WHERE id = :id',
                    ['id' => $id]
                );
                return $deleteResult;
                // Verificar si la eliminación fue exitosa
                if ($deleteResult) {
                    return redirect('/admin/home')->with('success', 'Usuario eliminado correctamente');
                } else {
                    return redirect('/admin/home')->with('error', 'Error al eliminar el usuario');
                }
            }
            return redirect('inicio_session')->with('login_error', 'No tienes permiso para realizar esta accion');
        } else {
            return redirect('inicio_session')->with('login_error', 'Usuario no encontrado debe de iniciar sesión');
        }
    }
    public function charts()
    {
        $user = auth()->user();
        if (isset($user)) {
            $query = DB::select(
                'SELECT c.nombre_categoria, 
                    COUNT(b.id) 
                    as total_libros 
                    FROM categories c 
                    LEFT JOIN books b 
                    ON c.id = b.categoria_id 
                    GROUP BY c.nombre_categoria;'
            );
            return view('U_Admin.estadisticas', compact('query'));
        }
        return redirect('inicio_session')->with('login_error', 'No puedes acceder a esta ruta');
    }
    public function exportexcel()
    {
        $user = auth()->user();
        if (isset($user)) {
            return Excel::download(new CategoriaExport, 'Reporte_Cantidad_Libros_Categoria.xlsx');
        }
        return redirect('inicio_session')->with('login_error', 'Usuario no encontrado debe de iniciar sesión');
    }
    public function index2()
    {
        $user = \Auth::user();
        if ($user->rol_id === 1) {
            $books = \DB::select('select * from books');
            $response = [
                'user' => $user,
                'books' => $books
            ];
            return response($response, 200);
        }
        return redirect('inicio_session')->with('login_error', 'No tienes los permisos para acceder a esta ruta');
    }
}