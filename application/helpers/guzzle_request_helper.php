<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    function guzzle_request($method, $uri, $body){
        $client = new Client();
        $request = $client->request($method,'http://103.158.196.31/serverArc/'.$uri,$body);
        $response = $request->getBody();
        $data = json_decode($response, true);

        return $data;
    }

    function urlApi(){
        return 'http://103.158.196.31/serverArc/';
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
    function guzzle_requestTracking($method, $uri, $body){
        $client = new Client();
        $request = $client->request($method,'http://103.158.196.31/tracking-service/'.$uri,$body);
        $response = $request->getBody();
        $data = json_decode($response, true);

        return $data;
    } 
}