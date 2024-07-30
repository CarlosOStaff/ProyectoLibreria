<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $books = DB::select(
                    'SELECT b.imagen,b.id,b.titulo_libro,b.descripcion,b.contenido,b.fecha_publicacion,c.nombre_categoria
                        FROM books b
                        JOIN categories c
                        ON b.categoria_id = c.id;'
                );
                return view('U_Admin.Books.lista_libros')->with('books', $books);
            }
            return redirect('inicio_session')->with('login_error', 'no tienes permiso para realizar esta accion, inicia sesion con un usario con los permisos adecuados');
        }
        return redirect('inicio_session')->with('Usuario no encontrado debes de iniciar sesión');
    }
    public function edit($id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
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
                return view('U_Admin.Books.editar_libros')->with(['books' => $books, 'categorias' => $categorias]);
            }
            return redirect('inicio_session')->with('No tienes permisos para realizar esta acción, inicia sesión con un usuario con los permisos necesarios');
        }
        return redirect('inicio_session')->with('Usuario no encontrado debes de iniciar sesión');
    }
    public function update(Request $request, $id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                if ($request->hasFile('imagen')) {
                    $imagen = $request->imagen;
                    $nombreimagen = \Str::slug($request->titulo_libro) . "." . $imagen->guessExtension();
                    $ruta = public_path('/img/imagenLibros/');
                    copy($imagen->getRealPath(), $ruta . $nombreimagen);
                    $imagen = $nombreimagen;
                }
                $book = DB::update(
                    'UPDATE books 
                        SET imagen = (:imagen),titulo_libro = (:titulo_libro), 
                        descripcion = (:descripcion), contenido = (:contenido), 
                        fecha_publicacion = (:fecha_publicacion), 
                        categoria_id = (:categoria_id)
                        WHERE id = (:id)'
                    ,
                    [
                        'imagen' => $imagen,
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
            return redirect('inicio_session')->with('No tienes permisos para realizar esta acción');
        }
        return redirect('inicio_session')->with('Usuario no encontrado debes de iniciar sesión');
    }
    public function destroy($id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $delteBook = DB::delete(
                    'DELETE FROM books 
                        WHERE id = (:id)',
                    [
                        'id' => $id
                    ]
                );
                return redirect('/admin/lista/libros');
            }
            return redirect('inicio_session')->with('login_error', 'No tienes permisos para realizar esta accion');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function newbook()
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $catalogues = $this->catalogues();
                return view('U_Admin.books.nuevo_libro')->with($catalogues->getData());
            }
            return redirect('inicio_session')->with('login_error', 'No tienes los permisos necesarios');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function store(Request $request)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                if ($request->hasFile('imagen')) {
                    $file = $request->imagen;
                    $nombreimagen = \Str::slug($request->titulo_libro) . "." . $file->guessExtension();
                    $ruta = public_path('/img/imagenLibros/');
                    /* $file->move($ruta,$nombreimagen ); */
                    copy($file->getRealPath(), $ruta . $nombreimagen);
                    $file->imagen = $nombreimagen;
                }
                $book = DB::insert(
                    'INSERT INTO books 
                        (imagen,titulo_libro,descripcion,contenido,fecha_publicacion,categoria_id)
                        VALUES (:imagen,:titulo_libro,:descripcion,:contenido,:fecha_publicacion,:categoria_id)',
                    [
                        'imagen' => $file->imagen = $nombreimagen,
                        'titulo_libro' => $request->titulo_libro,
                        'descripcion' => $request->descripcion,
                        'contenido' => $request->contenido,
                        'fecha_publicacion' => $request->fecha_publicacion,
                        'categoria_id' => intval($request->categoria_id)
                    ]
                );
                return redirect('/admin/lista/libros');
            }
            return redirect('inicio_session')->with('login_error', 'No tienes los permisos necesarios');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function librosprestados()
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $books = DB::select(
                    'SELECT l.id,l.libro_id,l.fecha_prestamo,b.imagen,b.id,
                        b.titulo_libro,b.descripcion,ct.nombre_categoria,u.nombre AS nombre_del_usuario 
                        FROM loans l 
                        JOIN books b ON l.libro_id = b.id 
                        JOIN categories ct ON b.categoria_id = ct.id 
                        JOIN users u ON l.user_id = u.id
                        ORDER BY b.id',
                );
                return view('U_Admin.books.lista_libros_prestados')->with('books', $books);
            }
            return redirect('inicio_session')->with('login_error', 'No tienes los permisos necesarios');
        }
        return redirect('inicio_session')->with('login_error', 'Usuario no encontrado debes de iniciar sesion');
    }
    public function detallesLibro($id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 1) {
                $book_id = intval($id);
                $booksDetails = DB::select(
                    'SELECT * FROM books
                        WHERE id = (:id)',
                    ['id' => $book_id]
                );
                return response()->json($booksDetails);
            }
            return redirect('inicio_session')->with('login_error', 'No tienes los permisos necesarios');
        }
        return redirect('inicio_session')->with('login_error', 'Usuario no encontrado debes de iniciar sesion');
    }
}