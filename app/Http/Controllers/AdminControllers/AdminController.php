<?php

namespace App\Http\Controllers\AdminControllers;

use App\Exports\CategoriaExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

require 'C:\laragon\www\prueba\ProyectoPrueba\vendor\autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class AdminController extends Controller
    {
        public function index()
        {
            if (isset($_SESSION['admin'])) {
                $user = $_SESSION['admin']->id;
                $query = DB::select('SELECT id,rol_id,nombre FROM users WHERE id = (:id)', ['id' => $user]);
                if ($query) {
                    $rol_id = reset($query);
                    if ($rol_id->rol_id === 1) {
                        $libros = DB::select('SELECT count(id) FROM books;');
                        $libros = reset($libros);

                        $users = DB::select('SELECT count(id) FROM users WHERE rol_id = 2 
                        AND email_verified_at IS NOT NULL;');
                        $users = reset($users);

                        $librosPRestados = DB::select('SELECT COUNT(id) FROM loans');
                        $librosPRestados = reset($librosPRestados);

                        return view('U_Admin.index', compact('query'))->with('libros', $libros)->with('users', $users)->with('librosPRestados', $librosPRestados);
                    }
                    return 'no tienes acceso';
                }
                return 'Debes de iniciar session';
            }
            return 'no puedes acceder a esta ruta';
        }
        public function edit()
        {
            if (isset($_SESSION['admin'])) {
                $user = $_SESSION['admin']->id;
                $user_rol = $_SESSION['admin']->rol_id;
                $query = DB::select(
                    'SELECT s.img_perfil,s.id, s.nombre, s.apellido, s.ciudad_id, s.email,c.id, c.nombre_ciudad 
                    FROM users s
                    JOIN cities c
                    ON s.ciudad_id = c.id
                    WHERE s.id = (:id)
                    AND s.rol_id = (:rol_id)',
                    ['id' => $user, 'rol_id' => $user_rol]
                );
                $ciudades = DB::select('SELECT * FROM cities;');
                if ($query) {
                    return view('U_Admin.admin_cuenta')->with('admin', $query)->with('ciudades', $ciudades);
                }
                return 'no tienes permisos para acceder a esta ruta';
            }
            return 'Debes de iniciar sesion';
        }
        public function update(Request $request)
        {
            if (isset($_SESSION['admin'])) {
                $user = $_SESSION['admin']->id;
                $user_rol = $_SESSION['admin']->rol_id;
                $user = DB::select(
                    'SELECT id, rol_id 
                    FROM users 
                    WHERE id = (:id) 
                    AND rol_id = (:rol_id)',
                    ['id' => $user, 'rol_id' => $user_rol]
                );
                if (isset($user)) {
                    $ciudad_id = intval($request->ciudad_id);
                    $id = reset($user);
                    if ($request->hasFile('img_perfil')) {
                        $file = $request->img_perfil;
                        $nombreimagen = \Str::slug($request->nombre) . "." . $file->guessExtension();
                        $ruta = public_path('/img/users/perfil/');
                        copy($file->getRealPath(), $ruta . $nombreimagen);
                        $file->img_perfil = $nombreimagen;
                    }
                    DB::update(
                        'UPDATE users 
                        SET img_perfil = (:img_perfil),nombre = (:nombre) ,apellido = (:apellido),ciudad_id = (:ciudad_id),email = (:email)
                        WHERE id = (:id);',
                        [
                            'img_perfil' => $file->img_perfil = $nombreimagen,
                            'nombre' => $request->nombre,
                            'apellido' => $request->apellido,
                            'ciudad_id' => $ciudad_id,
                            'email' => $request->email,
                            'id' => $id->id
                        ]
                    );
                    return redirect('/admin/edit');
                }
            }
            return response()->json(['message', 'Debes de iniciar sesion']);
        }
        public function newAdmin()
        {
            if (isset($_SESSION['admin'])) {
                $user_id = $_SESSION['admin']->id;
                $user_rol = $_SESSION['admin']->rol_id;
                $admin = DB::select(
                    'SELECT id,rol_id 
                    FROM users 
                    WHERE id = (:id) 
                    AND rol_id = (:rol_id)',
                    [
                        'id' => $user_id,
                        'rol_id' => $user_rol
                    ]
                );
                $ciudades = DB::select('SELECT * FROM cities;');
                if ($admin) {
                    return view('U_Admin.registro_nuevo_admin')->with('ciudades', $ciudades);
                } else {
                    return 'no tienes permisos para acceder a esta ruta';
                }
            }
        }
        public function store(Request $request)
        {
            if (isset($_SESSION['admin'])) {
                if ($request->hasFile('img_perfil')) {
                    $file = $request->img_perfil;
                    $nombreimagen = \Str::slug($request->nombre) . "_" . "$request->apellido" . "." . $file->guessExtension();
                    $ruta = public_path('/img/users/perfil/');
                    copy($file->getRealPath(), $ruta . $nombreimagen);
                    $file->img_perfil = $nombreimagen;
                }

                $email = DB::select('SELECT * FROM users WHERE email =(:email)', ['email' => $request->email]);

                if (!is_null($email)) {
                    $userId = DB::table('users')->insertGetId([
                        'rol_id' => 1,
                        'img_perfil' => $file->img_perfil = $nombreimagen,
                        'nombre' => $request->nombre,
                        'apellido' => $request->apellido,
                        'ciudad_id' => $request->ciudad_id,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                    ]);
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
                                        <a href="' . url('/validar/correo/' . $userId) . '" style="display: inline-block; padding: 1vw 1.5vw; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 5px;">Confirmar cuenta</a>
                                    </div>';
                        $mail->send();
                        return redirect('/registro/admin')->with('message_cliente_ok', 'Usuario creado con exito, verifique su cuenta por correo');
                    } catch (Exception $e) {
                        return response()->json(['message' => $e->getMessage()]);
                    }
                }
                return 'el correo ya existe';
            }
            return response()->json(['message', 'Debes de iniciar sesion']);
        }
        public function listAdmin()
        {
            if (isset($_SESSION['admin'])) {
                $admin_id = $_SESSION['admin']->id;
                $admin_rol = $_SESSION['admin']->rol_id;
                $query = DB::select(
                    'SELECT * FROM users 
                    WHERE id = (:id) 
                    AND rol_id = (:rol_id);',
                    ['id' => $admin_id, 'rol_id' => $admin_rol]
                );
                if ($query) {
                    $admins = DB::select(
                        'SELECT  u.img_perfil,u.id,u.nombre,
                        u.apellido,u.ciudad_id,
                        u.email,c.id,
                        c.nombre_ciudad,u.email_verified_at
                        FROM users u
                        JOIN cities c
                        ON u.ciudad_id = c.id
                        WHERE rol_id = 1
                        AND u.id != (:admin_id)',
                        [
                            'admin_id' => $_SESSION['admin']->id,
                        ]
                    );
                    return view('U_Admin.lista_administradores')->with('admins', $admins);
                }
            }
        }
        public function destroy($id)
        {
            // Verificar que las variables de sesión estén configuradas correctamente
            if (!isset($_SESSION['admin'])) {
                return 'No tienes permiso para borrar este usuario';
            }

            $admin_id = $_SESSION['admin']->id;
            $admin_rol = $_SESSION['admin']->rol_id;

            // Verificar que el admin está intentando eliminar su propio usuario
            $query = DB::select(
                'SELECT id, rol_id 
        FROM users 
        WHERE id = :id 
        AND rol_id = :rol_id',
                ['id' => $admin_id, 'rol_id' => $admin_rol]
            );
            if ($query) {
                // Intentar eliminar el usuario
                $deleteResult = DB::delete(
                    'DELETE FROM users 
            WHERE id = :id',
                    ['id' => $id]
                );

                // Verificar si la eliminación fue exitosa
                if ($deleteResult) {
                    return redirect('/admin/home')->with('success', 'Usuario eliminado correctamente');
                } else {
                    return redirect('/admin/home')->with('error', 'Error al eliminar el usuario');
                }
            } else {
                return 'No tienes permiso para borrar este usuario';
            }
        }

        public function charts()
        {
            if (isset($_SESSION['admin'])) {
                $admin_id = $_SESSION['admin']->id;
                $admin_rol = $_SESSION['admin']->rol_id;
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
        }
        public function exportexcel()
        {
            return Excel::download(new CategoriaExport, 'Reporte_Cantidad_Libros_Categoria.xlsx');
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
            return response('No tienes los permisos para acceder a esta ruta', 404);
        }
    }
}