<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contacto;
use Log;

class ContactoController extends Controller
{
    //Users info requests

    public function index(){
        $info = Contacto::select('Nombre','Foto')->get();
        return view('contacto', compact('info'));
    }

/* 
    if($request->ajax()){
        return "AJAX";
    }
    return "HTTP"; 
*/
}
