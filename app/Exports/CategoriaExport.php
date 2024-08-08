<?php

namespace App\Exports;

use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CategoriaExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        return view('catagoriaslibros', [
            'categorias' => \DB::select('SELECT c.nombre_categoria, COUNT(b.id) as total_libros
            FROM categories c
            LEFT JOIN books b ON c.id = b.categoria_id
            GROUP BY c.nombre_categoria')
        ]);
    }
}
