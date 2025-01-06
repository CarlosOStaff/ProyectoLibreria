<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'imagen',
        'titulo_libro',
        'descripcion',
        'contenido',
        'fecha_publicacion',
        'categoria_id'
    ];
    public function etiquetas(){
        return $this->belongsToMany(Tag::class); // Muchos a muchos
    }
}
