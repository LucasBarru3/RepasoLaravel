<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = ['nombre_ape', 'edad', 'telefono', 'direccion'];

    
    public function cursos(){
        return $this->belongsToMany(Curso::class,'alumnos_cursos','alumno_id','curso_id');
    }
}
