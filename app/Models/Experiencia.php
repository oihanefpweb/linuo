<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;

    protected $table = 'experiencia';

    protected $fillable = [
        'puesto', 
        'nombre',
        'descripcion',
        'tipo_contrato',
        'localizacion', 
        'fecha_inicio',
        'fecha_fin'
    ];

    protected $casts = [
        'fecha_inicio' => 'datetime',
        'fecha_fin' => 'datetime',
    ];

    public $timestamps = false;

    static function getExp($id){
        $contact_exp = self::select('puesto','nombre','localizacion','tipo_contrato', 'descripcion','fecha_inicio','fecha_fin')->where('persona', $id)->get();
        return $contact_exp;
    }
}
