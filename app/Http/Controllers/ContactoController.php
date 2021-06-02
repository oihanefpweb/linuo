<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Log;

class ContactoController extends Controller
{
    //Users info requests

    public function index(){
        //$info =  User::select('Nombre','Foto')->get();
        //return view('contacto', compact('info'));
        return view('contacto');
    }

/* 
    if($request->ajax()){
        return "AJAX";
    }
    return "HTTP"; 
*/
}
