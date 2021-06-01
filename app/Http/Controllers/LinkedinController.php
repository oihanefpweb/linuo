<?php

namespace App\Http\Controllers;

use App\Http\Api\LinkedinApiManager;
use Illuminate\Http\Request;

class LinkedinController extends Controller
{
    public function post_code(Request $request){
        $code = $request->code;
        $linkedinApiManager = new LinkedinApiManager();

        //Pruebas
        $token = "AQS1QygiqrcVOR_HnqrzP0qut0sBKDHlw1pH-I3fQtT9R83B5Xesyojhtxvmhso2uu45c_422Xabn2k9HJuscZeE3GQ5os53OKxS-pxp8CT3bismTvM6fPMMeqbuyt2MHvG9d8TV3EUp6jlEV9lXNJOV_lyqs_VwLNdKSRJebWjlZ5gjisZxW_ZiRTjbi8apFwaOM1Z4TfJQFlGtyIo";
        
        $response = $this->getUserData($token);

        
        $response = $token_request_reponse = $linkedinApiManager->getAccessToken($code);
        if($token_request_reponse->successful()){
            $request_body = $token_request_reponse->object();
            $token = $request_body->access_token;
            $response = $this->getUserData($token);
        }
        
        return response($response);
        

    }


    private function getUserData($token){
        $linkedinApiManager = new LinkedinApiManager();

        $user_response = $linkedinApiManager->getUser($token);
        
        return $user_response;
    }
}
