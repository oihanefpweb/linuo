<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificaciones extends Model
{
    use HasFactory;

    protected $table = 'certificaciones';

    protected $fillable = ['Nombre_Certificacion', 'Nombre_Compañia','Año_Finalizacion', 'Año_Inicio'];
    protected $guarded = ['Id_Certificacion', 'Id_Personal'];
    public $timestamps = false;
}
