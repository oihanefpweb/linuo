<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    use HasFactory;

    protected $table = 'idiomas';

    protected $fillable = ['Nombre', 'Nivel'];
    protected $guarded = ['Id_Personal', 'Id_Idioma'];
    public $timestamps = false;
}
