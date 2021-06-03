<?php

namespace App\Http\Controllers;

use App\Http\Api\LinkedinApiManager;
use Illuminate\Http\Request;

class LinkedinController extends Controller
{
    public function post_code(Request $request){
        $code = $request->code;
        $linkedinApiManager = new LinkedinApiManager();
        
        $response = $token_request_reponse = $linkedinApiManager->getAccessToken($code);
        
        return response($response);
        

    }
}
