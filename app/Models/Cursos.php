<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $table = 'cursos';

    protected $fillable = ['Nombre_Curso'];
    protected $guarded = ['Id_Curso', 'Id_Personal'];
    public $timestamps = false;
}
