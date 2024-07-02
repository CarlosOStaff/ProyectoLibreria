<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    public function catalogues()
    {
        $categorias = DB::select('select * from categories;');
        $etiquetas = DB::select('select * from tags');
        return view('register_book')->with('categorias', $categorias)->with('etiquetas', $etiquetas);
    }
    public function index()
    {
        $books = DB::select('SELECT b.id,b.titulo_libro,b.descripcion,b.contenido,
                    b.fecha_publicacion,c.nombre_categoria
                    FROM books b
                    JOIN categories c
                    ON b.categoria_id = c.id
                    ORDER BY b.id;');
        //return $books;
        return view('books', ['books' => $books]);
    }
    public function store(Request $request)
    {
        $catalogos = $this->catalogues();
        $book = Book::create($request->all());
        
        $tag = DB::insert(
            'INSERT INTO book_tag (book_id,tag_id) VALUES (:book_id,:tag_id)',
            ['book_id' => $book->id, 'tag_id' => $request->etiqueta_id]
        );
        return view('register_book')->with($catalogos->getData());
    }

    public function edit(Request $request, $id)
    {
        $catalogos = $this->catalogues();
        $book = DB::select('SELECT b.id,b.titulo_libro,b.descripcion,b.contenido
			,b.fecha_publicacion,c.nombre_categoria,
			bt.tag_id, t.nombre_etiqueta
            FROM books b
            JOIN categories c
            ON b.categoria_id = c.id
            JOIN book_tag bt
            ON b.id = bt.id
            JOIN tags t
            ON bt.tag_id = t.id
            WHERE b.id = (:id)', ['id' => $id]);
        return view('edit_book', compact('book'))->with($catalogos->getData());
        //return view('edit_book')->with($book);
    }

    public function update(Request $request, $id)
    {
        $books = $this->index();
        $book_update = DB::update('UPDATE books 
        SET titulo_libro = (:titulo_libro),descripcion = (:descripcion),contenido = (:contenido),
        fecha_publicacion = (:fecha_publicacion),categoria_id = (:categoria_id)
        WHERE id = (:id);', [
            'titulo_libro' => $request->titulo_libro,
            'descripcion' => $request->descripcion,
            'contenido' => $request->contenido,
            'fecha_publicacion' => $request->fecha_publicacion,
            'categoria_id' => $request->categoria_id,
            'id' => $id
        ]);
        $etiqueta = DB::update('UPDATE book_tag SET tag_id = (:tag_id) 
        WHERE book_id = (:book_id)', ['tag_id' => $request->etiqueta_id, 'book_id' => $id]);
        return view('/books')->with($books->getData());
    }

    public function destroy(Request $request, $id)
    {
        $books = $this->index();
        $book = DB::delete('DELETE FROM books WHERE id = (:id)', ['id' => $id]);
        return redirect('books')->with($books->getData());
    }
}