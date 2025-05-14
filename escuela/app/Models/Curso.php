<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';

    protected $fillable = ['nombre', 'nivel', 'horasAcademicas', 'profesor_id'];

    public function alumnos(){
        return $this->belongsToMany(Alumno::class,'alumnos_cursos','curso_id','alumno_id');
    }

    public function profesors(){
        return $this->belongsTo(Profesor::class,'profesor_id');
    }
}
