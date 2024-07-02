<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class AdminBooksController extends Controller
    {

        public function index()
        {
            if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']->id;
                $user_rol = $_SESSION['user']->rol_id;
                $query = DB::select(
                    'SELECT id, rol_id 
                    FROM users 
                    WHERE id = (:id) 
                    AND rol_id =(:rol_id)',
                    ['id' => $user_id, 'rol_id' => $user_rol]
                );
                if ($query) {
                    $books = DB::select(
                        'SELECT b.id,b.titulo_libro,b.descripcion,b.contenido,b.fecha_publicacion,c.nombre_categoria
                        FROM books b
                        JOIN categories c
                        ON b.categoria_id = c.id;'
                    );
                    return view('U_Admin.Books.lista_libros')->with('books', $books);
                }
                return response()->json(['message', 'no tienes permisos']);
            }
            return response()->json(['message', 'Debes de iniciar sesion']);
        }

        public function edit($id)
        {
            if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']->id;
                $user_rol = $_SESSION['user']->rol_id;
                $query = DB::select(
                    'SELECT id, rol_id FROM users WHERE id = (:id) AND rol_id = (:rol_id)',
                    ['id' => $user_id, 'rol_id' => $user_rol]
                );
                if ($query) {
                    $books = DB::select(
                        'SELECT b.id,b.titulo_libro,b.descripcion,
                        b.contenido,b.fecha_publicacion,
                        b.categoria_id,c.nombre_categoria
                        FROM books b
                        JOIN categories c
                        ON b.categoria_id = c.id
                        WHERE b.id = (:id)',
                        ['id' => $id]
                    );
                    $categorias = DB::select('SELECT * FROM categories;');
                    return view('U_Admin.Books.editar_libros')->with('books', $books)->with('categorias', $categorias);
                }
            }
            return response()->json(['message', 'Debes de iniciar sesion']);
        }

        public function update(Request $request, $id)
        {
            if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']->id;
                $user_rol = $_SESSION['user']->rol_id;
                $query = DB::select(
                    'SELECT id, rol_id FROM users WHERE id = (:id) AND rol_id = (:rol_id)',
                    ['id' => $user_id, 'rol_id' => $user_rol]
                );
                if ($query) {
                    $book = DB::update(
                        'UPDATE books 
                        SET titulo_libro = (:titulo_libro), 
                        descripcion = (:descripcion), contenido = (:contenido), 
                        fecha_publicacion = (:fecha_publicacion), 
                        categoria_id = (:categoria_id)
                        WHERE id = (:id)'
                        ,
                        [
                            'titulo_libro' => $request->titulo_libro,
                            'descripcion' => $request->descripcion,
                            'contenido' => $request->contenido,
                            'fecha_publicacion' => $request->fecha_publicacion,
                            'categoria_id' => $request->categoria_id,
                            'id' => $id
                        ]
                    );
                    return redirect('/admin/lista/libros');
                }
                return response()->json(['message', 'No tines permisos']);
            }
            return response()->json(['message', 'Debes de iniciar sesion']);
        }

        public function destroy($id)
        {
            if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']->id;
                $user_rol = $_SESSION['user']->rol_id;
                $query = DB::select(
                    'SELECT id, rol_id 
                    FROM users 
                    WHERE id = (:id) 
                    AND rol_id = (:rol_id);',
                    ['id' => $user_id, 'rol_id' => $user_rol]
                );
                if ($query) {
                    $delteBook = DB::delete('DELETE FROM books WHERE id = (:id)', ['id' => $id]);
                    return redirect('/admin/lista/libros');
                }
                return response()->json(['message', 'No tienes permisos para realizar esta accion']);
            }
            return response()->json(['message', 'Debes de iniciar sesion']);
        }
    }
}