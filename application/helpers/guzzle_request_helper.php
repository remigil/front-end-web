<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;

if (!function_exists('guzzle_request')) {
    /**
     * function request
     * @param method    string
     * @param uri       string
     * @param header    array
     * 
     * return array data
     */
    function guzzle_request($method, $uri, $body)
    { 
        $client = new Client();
        // $request = $client->request($method, 'http://localhost:3001/v1/' . $uri, $body);
        $request = $client->request($method, 'http://34.143.227.90:3001/v1/' . $uri, $body); 
        $response = $request->getBody();
        $data = json_decode($response, true);

        return $data;
    }  

    function url_api()
    {
        // return 'http://localhost:3001/uploads/';
        return 'http://k3ig20korlantas.id:3001/uploads/'; 
    }

    function urlApi()
    {
        // return 'http://localhost:3001/uploads/';
        return 'http://k3ig20korlantas.id:3001/uploads/'; 
    }
}

if (!function_exists('guzzle_requestTracking')) {
    /**
     * function request
     * @param method    string
     * @param uri       string
     * @param header    array
     * 
     * return array data
     */
    function guzzle_requestTracking($method, $uri, $body)
    {
        try {
            $client = new Client();
            // $request = $client->request($method, 'http://localhost:3001/track-location/' . $uri, $body);
            $request = $client->request($method, 'http://k3ig20korlantas.id:3001/track-location/' . $uri, $body);
            $response = $request->getBody();
            $data = json_decode($response, true);
            return $data;
            
        } catch (Exception $e) {
            return 'Cek sinyal';
        }


    }
}
