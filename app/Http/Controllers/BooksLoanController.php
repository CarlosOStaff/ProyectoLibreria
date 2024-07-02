<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BooksLoanController extends Controller
{
    public function index()
    {
        $query =
            'SELECT b.titulo_libro,b.descripcion,c.nombre_categoria,l.fecha_prestamo,l.id
                FROM loans l
                JOIN users u 
                ON l.user_id = u.id
                JOIN books b
                ON l.libro_id = b.id
                JOIN categories c
                ON b.categoria_id = c.id
                WHERE l.user_id = 2;';
        $booksLoan = DB::select($query);
        return view("books_loan")->with('booksLoan', $booksLoan);
    }
    public function show($id)
    {   
        $booksLoan = DB::select('SELECT b.titulo_libro,b.descripcion,c.nombre_categoria,l.fecha_prestamo,l.id
                FROM loans l
                JOIN users u 
                ON l.user_id = u.id
                JOIN books b
                ON l.libro_id = b.id
                JOIN categories c
                ON b.categoria_id = c.id
                WHERE l.user_id = (:id);', ['id' => $id]);
        return view("books_loan")->with('booksLoan', $booksLoan);
    }
    public function books()
    {
        $books = Book::get();
        return view('lend_book')->with('books', $books);
    }
    public function store(Request $request)
    {
        $booksLoan = $this->index();
        Loan::create($request->all());
        return redirect('books_loan')->with($booksLoan->getData());
    }
    public function destroy($id)
    {
        $loan = DB::delete('DELETE FROM loans WHERE id = (:id)', ['id' => $id]);
        return redirect('books_loan');
    }
}