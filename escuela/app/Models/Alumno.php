<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';

    protected $fillable = ['nombre_ape', 'edad', 'telefono', 'direccion', 'imagen'];

    
    public function cursos(){
        return $this->belongsToMany(Curso::class,'alumnos_cursos','alumno_id','curso_id');
    }
}
