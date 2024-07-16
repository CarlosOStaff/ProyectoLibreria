<?php

namespace App\Http\Controllers\ClienteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class ClienteController extends Controller
    {
        public function index()
        {
            if (isset($_SESSION['cliente'])) {
                $user = $_SESSION['cliente']->id;
                $user_name = $_SESSION['cliente']->nombre;
                $query = DB::select('SELECT id FROM users WHERE id = (:id)', [
                    'id' => $user
                ]);
                if ($_SESSION['cliente']->rol_id === 2) {
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
                        ['user_id' => $user]
                    );
                    return view('U_Cliente.index')->with('books', $books)->with('user', $user_name);
                }
                return redirect('/admin/home')->with('message_error', 'No tienes permiso par acceder a esta ruta');
            }
            return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
        }
        public function edit()
        {
            if (isset($_SESSION['cliente'])) {
                $user_rol = $_SESSION['cliente']->rol_id;
                $user_id = $_SESSION['cliente']->id;
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
            if (isset($_SESSION['cliente'])) {
                $user = $_SESSION['cliente']->id;
                $rol_id = $_SESSION['cliente']->rol_id;
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
                            return redirect('/inicio_session');
                        }
                    } else {
                        $errorMessage = "Debes iniciar sesión para acceder a esta página.";
                        echo "<script>alert('$errorMessage'); window.location.href = 'login.blade.phpS';</script>";
                        exit;
                    }
                }
                $errorMessage = "Debes iniciar sesión para acceder a esta página.";
                echo "<script>alert('$errorMessage'); window.location.href = 'login.blade.phpS';</script>";
                exit;
            }
            return redirect('login');
        }
        public function newindex(){
            $user = \Auth::user();
            if($user->rol_id ===2){
                $books =\DB::select('SELECT b.id, b.imagen, b.titulo_libro, b.descripcion, b.categoria_id, c.nombre_categoria
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
                    return response($books,200);
            }
        }
    }
}