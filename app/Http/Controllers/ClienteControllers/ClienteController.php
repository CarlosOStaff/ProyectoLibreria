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
                        'SELECT img_perfil,id,rol_id,nombre,apellido,ciudad_id,email,password 
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

                if ($rol_id === 2 && $user === $id) {
                    $request->validate([
                        'nombre' => 'required|string|max:255',
                        'apellido' => 'required|string|max:255',
                        'ciudad_id' => 'nullable',
                        'email' => 'required|string|email|max:255',
                        'password' => 'nullable|string|min:8|confirmed',
                        'img_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]);

                    $data = [
                        'nombre' => $request->nombre,
                        'apellido' => $request->apellido,
                        'ciudad_id' => intval($request->ciudad_id),
                        'email' => $request->email,
                    ];

                    if ($request->hasFile('img_perfil')) {
                        $file = $request->file('img_perfil');
                        $nombreimagen = \Str::slug($request->nombre) . "." . $file->guessExtension();
                        $ruta = public_path('/img/users/perfil/');
                        $file->move($ruta, $nombreimagen);
                        $data['img_perfil'] = $nombreimagen;
                    }

                    if ($request->filled('password')) {
                        $data['password'] = bcrypt($request->password);
                    }

                    DB::table('users')->where('id', $id)->update($data);

                    if ($request->filled('password')) {
                        session_destroy();
                        return redirect('/inicio_session');
                    }

                    return redirect('/cliente/edit')->with('success', 'Datos guardados');
                } else {
                    $errorMessage = "Debes iniciar sesión para acceder a esta página.";
                    echo "<script>alert('$errorMessage'); window.location.href = 'login.blade.php';</script>";
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
            $books = \DB::select('select * from books');
            return response($books, 200);
        }
    }
}