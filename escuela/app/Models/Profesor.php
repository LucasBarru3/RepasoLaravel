<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesors';

    protected $fillable = ['nom_ape', 'profesion', 'gradoAcademico', 'telefono'];

    public function cursos(){
        return $this->hasMany(Curso::class,'profesor_id');
    }
}
