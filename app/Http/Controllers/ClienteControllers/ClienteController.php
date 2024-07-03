<?php

namespace App\Http\Controllers\ClienteControllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Controllers\BookController;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class ClienteController extends Controller
    {
        public function index()
        {
            /*         session_start();
             */
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']->id;
                $query = DB::select('SELECT id FROM users WHERE id = (:id)', [
                    'id' => $user
                ]);
                if ($_SESSION['user']->rol_id === 2) {

                    $books = DB::select(
                        'SELECT b.id,b.titulo_libro,b.descripcion,b.categoria_id, c.nombre_categoria
                                FROM books b
                                JOIN categories c
                                ON b.categoria_id = c.id
                                ORDER BY b.id;'
                    );
                    return view('U_Cliente.index')->with('books', $books);
                }
                return redirect('/admin/home')->with('message_error', 'No tienes permiso par acceder a esta ruta');
            }
            return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
        }

        public function edit()
        {
            /*         session_start();
             */
            if (isset($_SESSION['user'])) {
                $user_rol = $_SESSION['user']->rol_id;
                $user_id = $_SESSION['user']->id;
                if ($user_rol === 2) {
                    $usuario = DB::select(
                        'SELECT id,rol_id,nombre,apellido,ciudad_id,email,password 
                        FROM users WHERE id = (:id)',
                        ['id' => $user_id]
                    );
                    $cities = DB::select(
                        'SELECT id, nombre_ciudad FROM cities;'
                    );
                    $states = DB::select('SELECT s.nombre_estado FROM states s GROUP BY s.nombre_estado;');
                    return view('U_Cliente.cliente_edit')->with('usuario', $usuario)
                        ->with('cities', $cities)
                        ->with('states', $states);
                }
                return 'no tienes permisos';
            }

            return 'debes de iniciar sesion';
        }

        public function update(Request $request, $id)
        {
            /*         session_start();
             */
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']->id;
                $rol_id = $_SESSION['user']->rol_id;
                $id = intval($id);
                if ($rol_id === 2) {
                    if ($user === $id) {
                        if (is_null($request->password)) {
                            $userUpdate = DB::update(
                                'UPDATE users 
                            SET nombre = (:nombre),
                            apellido = (:apellido),
                            ciudad_id = (:ciudad_id),
                            email = (:email)
                            WHERE id = (:id)'
                                ,
                                [
                                    'nombre' => $request->nombre,
                                    'apellido' => $request->apellido,
                                    'ciudad_id' => intval($request->ciudad_id),
                                    'email' => $request->email,
                                    'id' => $id
                                ]
                            );
                            return redirect('/cliente/edit')->with('success', 'Dagos guardados');
                        } else {
                            $userUpdate = DB::update(
                                'UPDATE users 
                            SET nombre = (:nombre),
                            apellido = (:apellido),
                            ciudad_id = (:ciudad_id),
                            email = (:email),
                            password = (:password)
                            WHERE id = (:id)'
                                ,
                                [
                                    'nombre' => $request->nombre,
                                    'apellido' => $request->apellido,
                                    'ciudad_id' => intval($request->ciudad_id),
                                    'email' => $request->email,
                                    'password' => bcrypt($request->password),
                                    'id' => $id
                                ]
                            );
                            session_destroy();
                            return redirect('/login');
                        }
                    } else {
                        // El usuario no está logeado, redirecciona o muestra un mensaje de error
                        $errorMessage = "Debes iniciar sesión para acceder a esta página.";
                        // Puedes redireccionar a otra página o mostrar un mensaje aquí mismo
                        echo "<script>alert('$errorMessage'); window.location.href = 'login.blade.phpS';</script>";
                        exit; // Asegura que el script se detenga después de mostrar el mensaje
                    }
                }
                // El usuario no está logeado, redirecciona o muestra un mensaje de error
                $errorMessage = "Debes iniciar sesión para acceder a esta página.";
                // Puedes redireccionar a otra página o mostrar un mensaje aquí mismo
                echo "<script>alert('$errorMessage'); window.location.href = 'login.blade.phpS';</script>";
                exit; // Asegura que el script se detenga después de mostrar el mensaje
            }
            return redirect('login');
        }
    }
}