<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;
    protected $table = 'experiencia_laboral';

    protected $fillable = ['Nombre_Compañia', 'Descripcion','Fecha_Final','Fecha_Inicio', 'Localizacion'];
    protected $guarded = ['Id_Personal', 'Id_Experiencia'];
    public $timestamps = false;
}
