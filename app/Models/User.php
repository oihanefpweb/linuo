<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Schema;
use Log;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $table = 'persona';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido1',
        'apellido2',
        'resumen',
        'telefono',
        'email',
        'foto_perfil',
    ];

    public $timestamps = false;

    public function experiencias(){
        return $this->hasMany(Experiencia::class, "persona", "id");
    }
    public function estudios(){
        return $this->hasMany(Estudios::class, "persona", "id");
    }
    public function skills(){
        return $this->hasMany(Skills::class, "persona", "id");
    }
    static function getUsr($id){
        $info_data = self::find($id);
        return $info_data;
    }
    
}
