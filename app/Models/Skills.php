<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $table = 'skills';

    protected $fillable = [
        'nombre'
    ];
    
    public $timestamps = false;
    
    static function getSkills($id){
        $contact_skills = self::select('nombre')->where('persona', $id)->get();
        return $contact_skills;
    }
}
