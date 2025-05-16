<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;
    protected $table = 'opinions';

    protected $fillable = ['libro_id', 'nombre_usuario', 'valoracion', 'comentario'];

    public function libros(){
        return $this->belongsTo(Libro::class, 'libro_id');
    }
}
