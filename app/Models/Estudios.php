<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudios extends Model
{
    use HasFactory;
    protected $table = 'estudios';

    protected $fillable = [
        'nombre',
        'descripcion',
        'centro',
        'fecha_inicio',
        'fecha_fin'
    ];
    
    public $timestamps = false;
    static function getEst($id){
        $contact_est = self::select('nombre','centro','descripcion','fecha_inicio','fecha_fin')->where('persona', $id)->get();
        return $contact_est;
    }
}
