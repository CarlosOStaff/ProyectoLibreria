<?php

namespace App\Http\Controllers\ClienteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClientBookController extends Controller
{
    public function listBooks()
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 2) {
                $listBooks = DB::select(
                    'SELECT s.id,s.libro_id,s.fecha_prestamo,b.imagen,b.id,
                            b.titulo_libro,b.descripcion,ct.nombre_categoria 
                            FROM loans s 
                            JOIN books b ON s.libro_id = b.id 
                            JOIN categories ct ON b.categoria_id = ct.id 
                            WHERE s.user_id = (:id)
                            ORDER BY b.id;',
                    ['id' => $user->id]
                );
                return view('U_cliente.lista_libros')->with('listBooks', $listBooks);
            }
            return redirect('inicio_session')->with('login_error', 'No tienes permiso par acceder a esta ruta');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function userBook($id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 2) {
                $book = DB::select(
                    'SELECT b.id,b.titulo_libro,b.descripcion,
                        b.contenido,b.fecha_publicacion,ct.nombre_categoria
                        FROM books b
                        JOIN categories ct
                        ON b.categoria_id = ct.id
                        WHERE b.id = (:id)',
                    ['id' => $user->id]
                );
                return view('U_Cliente.libro')->with('book', $book);
            }
            return redirect('inicio_session')->with('login_error', 'No tienes permiso par acceder a esta ruta');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function regresarLibro($id)
    {
        $user = auth()->user();
        if (isset($user)) {
            $id = intval($id);
            $loan = DB::select(
                'SELECT * FROM loans 
                    WHERE user_id = (:user_id) 
                    AND libro_id = (:libro_id)',
                [
                    'user_id' => $user->id,
                    'libro_id' => $id
                ]
            );
            $loan = reset($loan);
            $devolucion = DB::insert(
                'INSERT INTO book_returns (user_id,prestamo_id,fecha_devolucion) 
                        VALUES (:user_id,:prestamo_id,:fecha_devolucion)',
                ['user_id' => $user->id, 'prestamo_id' => $loan->id, 'fecha_devolucion' => date('Y-m-d')]
            );
            $delete = DB::delete(
                'DELETE FROM loans 
                    WHERE libro_id = (:libro_id) 
                    AND user_id = (:user_id);',
                [
                    'libro_id' => $id,
                    'user_id' => $user->id
                ]
            );
            return redirect('/cliente/mis_libros');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
    public function store($id)
    {
        $user = auth()->user();
        if (isset($user)) {
            if ($user->rol_id === 2) {
                $loanBook = DB::insert(
                    'INSERT INTO loans (user_id,libro_id,fecha_prestamo) 
                        VALUES (:user_id,:libro_id,:fecha_prestamo)',
                    [
                        'user_id' => $user->id,
                        'libro_id' => $id,
                        'fecha_prestamo' => date('Y-m-d'),
                    ]
                );
                return redirect('/cliente/mis_libros');
            }
            return redirect('inicio_session')->with('login_error', 'Notienes permisos para acceder a esta ruta');
        }
        return redirect('inicio_session')->with('login_error', 'Debes de iniciar sesion');
    }
}
