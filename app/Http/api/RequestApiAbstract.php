<?php

namespace App\Http\Api;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class RequestApiAbstract{

    protected $host = "https://api.linkedin.com";

    protected $api = "/v2";

    private $api_token;

    public function __construct(){
        $this->api_token = env("LINKEDIN_API_TOKEN");
    }

    public function request($request_type, $url, $headers = array(), $data = array()) : ?Response {
        $new_headers = $headers;
        $new_headers["token"] = $this->api_token;
        switch($request_type){
            case "POST":
                return Http::withHeaders($new_headers)->post($url, $data);
                break;
            case "GET":
                return Http::withHeaders($new_headers)->get($url);
                break;
            default:
                return null;
        }
    }
}
