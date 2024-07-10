<?php

namespace App\Http\Controllers\ClienteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    class ClientBookController extends Controller
    {
        public function listBooks()
        {
            if (isset($_SESSION['user'])) {

                $user = $_SESSION['user'];
                $rol_id = $_SESSION['user']->rol_id;
                $id = $user->id;
                $query = DB::select(
                    'SELECT id,rol_id 
                    FROM users 
                    WHERE id = (:id) 
                    AND rol_id = (:rol_id)',
                    ['id' => $id, 'rol_id' => $rol_id]
                );
                if ($query) {
                    if ($rol_id === 2) {
                        $listBooks = DB::select(
                            'SELECT s.id,s.libro_id,s.fecha_prestamo,b.id,
                            b.titulo_libro,b.descripcion,ct.nombre_categoria 
                            FROM loans s 
                            JOIN books b ON s.libro_id = b.id 
                            JOIN categories ct ON b.categoria_id = ct.id 
                            WHERE s.user_id = (:id)
                            ORDER BY b.id;',
                            ['id' => $id]
                        );
                        return view('U_cliente.lista_libros')->with('listBooks', $listBooks);
                    }
                    return redirect('/admin/home')->with('message_error', 'No tienes permiso par acceder a esta ruta');
                }
                return response()->json(['message', 'No tienes acceso a esta ruta']);
            }
            return response()->json(['message', 'No tienes acceso']);
        }
        public function userBook($id)
        {
            $book = DB::select(
                'SELECT b.id,b.titulo_libro,b.descripcion,
                b.contenido,b.fecha_publicacion,ct.nombre_categoria
                FROM books b
                JOIN categories ct
                ON b.categoria_id = ct.id
                WHERE b.id = (:id)',
                ['id' => $id]
            );
            return view('U_Cliente.libro')->with('book', $book);
        }
        public function regresarLibro($id)
        {
            $user = $_SESSION['user']->id;
            $id = intval($id);
            $loan = DB::select(
                'SELECT * FROM loans 
                WHERE user_id = (:user_id) 
                AND libro_id = (:libro_id)',
                [
                    'user_id' => $user,
                    'libro_id' => $id
                ]
            );
            $loan = reset($loan);
            $devolucion = DB::insert(
                'INSERT INTO book_returns (user_id,prestamo_id,fecha_devolucion) 
                    VALUES (:user_id,:prestamo_id,:fecha_devolucion)',
                ['user_id' => $user, 'prestamo_id' => $loan->id, 'fecha_devolucion' => date('Y-m-d')]
            );
            $delete = DB::delete(
                'DELETE FROM loans 
                WHERE libro_id = (:libro_id) 
                AND user_id = (:user_id);',
                [
                    'libro_id' => $id,
                    'user_id' => $user
                ]
            );
            return redirect('/cliente/mis_libros');
        }
        public function store($id)
        {
            $user = $_SESSION['user']->id;
            $loanBook = DB::insert(
                'INSERT INTO loans (user_id,libro_id,fecha_prestamo) 
                VALUES (:user_id,:libro_id,:fecha_prestamo)',
                [
                    'user_id' => $user,
                    'libro_id' => $id,
                    'fecha_prestamo' => date('Y-m-d H:i:s'),
                ]
            );
            return redirect('/cliente/mis_libros');
        }
    }
}