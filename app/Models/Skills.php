<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;
    protected $table = 'skills';

    protected $fillable = ['Nombre'];
    protected $guarded = ['Id_Personal', 'Id_Skill'];
    public $timestamps = false;
}
