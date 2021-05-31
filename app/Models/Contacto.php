<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'personal_info';

    protected $fillable = ['Direccion', 'Fec_Nacimiento','Nombre', 'Apellidos', 'Telefono','Resumen'];
    protected $guarded = ['Id', 'Foto'];
    public $timestamps = false;
}
