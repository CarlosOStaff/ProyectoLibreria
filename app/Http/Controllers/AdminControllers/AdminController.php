<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class AdminController extends Controller
    {
        public function index()
        {
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']->id;
                $query = DB::select('SELECT id,rol_id,nombre FROM users WHERE id = (:id)', ['id' => $user]);
                if ($query) {
                    $rol_id = reset($query);
                    if ($rol_id->rol_id === 1) {
                        $libros = DB::select('SELECT count(id) FROM books;');
                        $libros = reset($libros);

                        $users = DB::select('SELECT count(id) FROM users WHERE rol_id = 2;');
                        $users = reset($users);

                        $librosPRestados = DB::select('SELECT COUNT(id) FROM loans');
                        $librosPRestados = reset($librosPRestados);

                        return view('U_Admin.index', compact('query'))->with('libros', $libros)->with('users', $users)->with('librosPRestados', $librosPRestados);
                    }
                    return 'no tienes acceso';
                }
                return 'Debes de iniciar session';
            }
        }
        public function edit()
        {
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']->id;
                $user_rol = $_SESSION['user']->rol_id;
                $query = DB::select(
                    'SELECT s.id, s.nombre, s.apellido, s.ciudad_id, s.email,c.id, c.nombre_ciudad 
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
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']->id;
                $user_rol = $_SESSION['user']->rol_id;
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
                    DB::update(
                        'UPDATE users 
                        SET nombre = (:nombre) ,apellido = (:apellido),ciudad_id = (:ciudad_id),email = (:email)
                        WHERE id = (:id);',
                        [
                            'nombre' => $request->nombre,
                            'apellido' => $request->apellido,
                            'ciudad_id' => $ciudad_id,
                            'email' => $request->email,
                            'id'=>$id->id
                        ]
                    );
                    return redirect('/admin/edit');
                }
            }
            return response()->json(['message','Debes de iniciar sesion']);
        }
    }
}