<?php

namespace App\Http\Api;

class LinkedinApiManager extends RequestApiAbstract{
    
    private $endpoints = array(
        "people" => '/me?oauth2_access_token={linkedin_key}',
        "authorization" => "/accessToken?client_id={client_id}&client_secret={client_secret}&grant_type=authorization_code&redirect_uri={redirect_uri}&code={code}"
    );

    public function getAccessToken($code){
        $client_id = env("LINKEDIN_CLIENT_ID", "");
        $client_secret = env("LINKEDIN_CLIENT_SECRET", "");
        $endpoint = $this->endpoints["authorization"];
        $host = url("http://127.0.0.1:3001");
        $headers = [];

        $endpoint = str_replace("{client_id}", $client_id, $endpoint);
        $endpoint = str_replace("{client_secret}", $client_secret, $endpoint);
        $endpoint = str_replace("{code}", $code, $endpoint);
        $endpoint = str_replace("{redirect_uri}", $host, $endpoint);
        $headers["Content-Type"] = "application/x-www-form-urlencoded";

        $url = $this->host . $this->api_token . $endpoint;
        return $this->request("POST", $url);
    }

    public function getUser($token){
        $endpoint = $this->endpoints["people"];
        $headers = [];

        $headers["Authorization"] = "Bearer " . $token;
        $headers["Content-Type"] = "application/x-www-form-urlencoded";

        $endpoint = str_replace("{linkedin_key}", $token, $endpoint);
        $url = $this->host . $this->api . $endpoint;
        return $this->request("GET", $url);
    }
}