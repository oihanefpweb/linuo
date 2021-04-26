<?php

namespace App\Http\Api;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LinkedinApiManager extends RequestApiAbstract{
    
    private $endpoints = array(
        "people" => "/people/{user_id}"
    );

    public function get_user($user_id){
        $endpoint = $this->endpoints["people"];
        $endpoint = str_replace("{user_id}", $user_id, $endpoint);
        $url = $this->host . $this->api . $endpoint;
        return $this->request("GET", $url);
    }
}
