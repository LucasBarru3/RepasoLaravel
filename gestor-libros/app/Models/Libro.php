<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $table = 'libros';

    protected $fillable = ['titulo', 'descripcion', 'ano_publicacion', 'autor_id'];

    public function autors(){
        return $this->belongsTo(Autor::class, 'autor_id');
    }

    public function opinions(){
        return $this->hasMany(Opinion::class,'libro_id');
    }
}
