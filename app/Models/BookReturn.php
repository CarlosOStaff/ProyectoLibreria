<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReturn extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "fecha_devolucion",
        "prestamo_id",
        "user_id",
    ];
}
