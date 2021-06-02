<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Estudios;
use App\Models\Experiencia;
use App\Models\Skills;


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
        $complete_info = [];
        $usr = $request->id;
        if($usr){
            $info_data = User::getUsr($usr);
            $info = [
                'title' => 'personal@info',
                'info_data' => $info_data
            ];
            $contact_skills = Skills::getSkills($usr);
            $skills = [
                'title' => 'skills@info',
                'info_data' => $contact_skills
            ];
            
            $contact_exp = Experiencia::getExp($usr);
            $exp = [
                'title' => 'experience@info',
                'info_data' => $contact_exp
            ];
            $contact_est = Estudios::getEst($usr);
            $studies = [
                'title' => 'estudies@info',
                'info_data' => $contact_est
            ];

            array_push($complete_info,$info,$skills,$exp,$studies);
        }
        return  json_encode($complete_info);

    }

/* 
    if($request->ajax()){
        return "AJAX";
    }
    return "HTTP"; 
*/
}
