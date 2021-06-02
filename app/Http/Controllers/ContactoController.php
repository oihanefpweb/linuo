<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Log;
use Illuminate\Support\Facades\Schema;

class ContactoController extends Controller
{
    private $users_info;
    //Users info requests

    public function index(){
        $info =  User::select('nombre','foto_perfil','id')->get();
        return view('contacto', compact('info'));
    }

    public function ajaxRequest(){
        return view('ajaxRequest');
    }

    public function ajaxRequestPost(Request $request){
        $usr = $request->id;
        if($usr){
            //$usr_info=User::where('id',$usr)->get();
            $info_data = User::find($usr);

        }
        return $info_data->toJson();

    }


/* 
    if($request->ajax()){
        return "AJAX";
    }
    return "HTTP"; 
*/
}
