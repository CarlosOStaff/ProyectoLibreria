<?php

namespace App\Http\Controllers\ClienteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cookie;

class ClienteController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 2) {
                $books = DB::select(
                    'SELECT b.id, b.imagen, b.titulo_libro, b.descripcion, b.categoria_id, c.nombre_categoria
                        FROM books b
                        JOIN categories c ON b.categoria_id = c.id
                        WHERE b.id NOT IN (
                            SELECT b.id
                            FROM loans l
                            JOIN books b ON l.libro_id = b.id
                            WHERE l.user_id = (:user_id)
                        )
                        ORDER BY b.id;',
                    ['user_id' => $user->id]
                );
                return view('U_Cliente.index')->with(['books' => $books, 'user' => $user->nombre]);
            }
            return redirect('/admin/home')->with('message_error', 'No tienes permiso par acceder a esta ruta');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function edit()
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 2) {
                $usuario = DB::select(
                    'SELECT img_perfil,id,rol_id,nombre,apellido,ciudad_id,email,password 
                        FROM users WHERE id = (:id)',
                    ['id' => $user->id]
                );
                $cities = DB::select(
                    'SELECT id, nombre_ciudad FROM cities;'
                );
                $states = DB::select('SELECT s.nombre_estado FROM states s GROUP BY s.nombre_estado;');
                return view('U_Cliente.cliente_edit')->with([
                    'usuario' => $usuario,
                    'cities' => $cities,
                    'states' => $states
                ]);
            }
            return redirect('inicio_session')->with('login_error', 'No tienes los permisos necesarios');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 2) {
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
                if (is_null($request->password)) {
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
                    return redirect('/cliente/edit')->with('success', 'Datos guardados');
                }
                // Actualizar el usuario en la base de datos
                DB::update(
                    'UPDATE users 
                        SET img_perfil = (:img_perfil), nombre = (:nombre), 
                        apellido = (:apellido), ciudad_id = (:ciudad_id), 
                        email = (:email),password = (:password)
                        WHERE id = (:id)',
                    [
                        'img_perfil' => $newImage,
                        'nombre' => $request->nombre,
                        'apellido' => $request->apellido,
                        'ciudad_id' => $ciudadId,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                        'id' => $user->id
                    ]
                );
                if ($request->filled('password')) {
                    auth()->user()->tokens()->delete();
                    $cookie = Cookie::forget('cookie_token');
                    return redirect('/inicio_session');
                }
            } else {
                $errorMessage = "Debes iniciar sesión para acceder a esta página.";
                echo "<script>alert('$errorMessage'); window.location.href = '{{route('cliente.edit')}}';</script>";
                exit;
            }
        }
        return redirect('login');
    }
    public function newindex()
    {
        $user = \Auth::user();
        if ($user->rol_id === 2) {
            $books = \DB::select('SELECT s.id,s.libro_id,s.fecha_prestamo,b.imagen,b.id,
                            b.titulo_libro,b.descripcion,ct.nombre_categoria 
                            FROM loans s 
                            JOIN books b ON s.libro_id = b.id 
                            JOIN categories ct ON b.categoria_id = ct.id 
                            WHERE s.user_id = (:user_id)
                            ORDER BY b.id;', ['user_id' => $user->id]);
            return response($books, 200);
        }
    }
    public function url()
    {
        $books = \DB::select('SELECT * FROM books');
        return response($books, 200);
    }
}