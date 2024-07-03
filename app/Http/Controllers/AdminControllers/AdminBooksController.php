<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class AdminBooksController extends Controller
    {
        public function catalogues()
        {
            $categorias = DB::select('select * from categories;');
            $etiquetas = DB::select('select * from tags');
            return view('U_Admin.books.nuevo_libro')->with('categorias', $categorias)->with('etiquetas', $etiquetas);
        }
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
        public function newbook()
        {
            if (isset($_SESSION['user'])) {
                $catalogues = $this->catalogues();
                $user_rol = $_SESSION['user']->rol_id;
                $query = DB::select('SELECT rol_id FROM users WHERE rol_id = (:rol_id)', ['rol_id' => $user_rol]);
                if ($query) {
                    return view('U_Admin.books.nuevo_libro')->with($catalogues->getData());
                }
            }
        }
        public function store(Request $request)
        {
            if (isset($_SESSION['user'])) {
                $user_rol = $_SESSION['user']->rol_id;
                $query = DB::select(
                    'SELECT rol_id FROM users WHERE rol_id = (:rol_id)',
                    ['rol_id' => $user_rol]
                );
                if ($query) {
                    $book = DB::insert(
                        'INSERT INTO books 
                        (titulo_libro,descripcion,contenido,fecha_publicacion,categoria_id)
                        VALUES (:titulo_libro,:descripcion,:contenido,:fecha_publicacion,:categoria_id)',
                        [
                            'titulo_libro' => $request->titulo_libro,
                            'descripcion' => $request->descripcion,
                            'contenido' => $request->contenido,
                            'fecha_publicacion' => $request->fecha_publicacion,
                            'categoria_id' => intval($request->categoria_id)
                        ]
                    );
                    /* DB::insert(
                        'INSERT INTO book_tag (book_id,tag_id) VALUES (:book_id,:tag_id)',
                        ['book_id' => $book->id, 'tag_id' => intval($request->etiqueta_id)]
                    ); */
                    return redirect('/admin/lista/libros');
                }
                return response()->json(['message', 'Usuario no encontrado']);
            }
            return view('login');
        }
        public function librosprestados()
        {
            $user_rol = $_SESSION['user']->rol_id;
            $query = DB::select(
                'SELECT rol_id 
                FROM users 
                WHERE rol_id = (:rol_id)',
                ['rol_id' => $user_rol]
            );
            if ($query) {
                $books = DB::select(
                    'SELECT br.user_id,br.prestamo_id,
                    l.libro_id,b.titulo_libro,
                    b.descripcion,l.fecha_prestamo,
                    ct.nombre_categoria,
                    s.nombre,s.email 
                    FROM book_returns br
                    JOIN loans l
                    ON br.user_id = l.user_id
                    JOIN books b
                    ON b.id = l.libro_id
                    JOIN categories ct
                    ON b.categoria_id = ct.id
                    JOIN users s
                    ON br.user_id = s.id;'
                );
                return view('U_Admin.books.lista_libros_prestados')->with('books', $books);
            }
        }
    }
}