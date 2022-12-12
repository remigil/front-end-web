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
        try {
            $client = new Client(); 
            // $request = $client->request($method, 'http://localhost:3020/v1/' . $uri, $body); 
            $request = $client->request($method, 'http://k3ig20korlantas.id:3001/v1/' . $uri, $body); 
            // $request = $client->request($method, 'http://34.143.227.90:3019/v1/' . $uri, $body); 
            $response = $request->getBody();
            $data = json_decode($response, true);

            return $data;
        } catch (Exception $e) {
            return redirect(base_url('login/logout?'.$uri.'-'.$method.'-'.$body.''));
            // return location.reload();
        }
    }  

    function url_api()
    {
        // return 'http://localhost:3002/uploads/';
        return 'http://k3ig20korlantas.id:3001/uploads/';
        // return 'http://34.143.227.90:3019/uploads/'; 
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
            // $request = $client->request($method, 'http://localhost:3002/track-location/' . $uri, $body);
            $request = $client->request($method, 'http://103.163.139.100:3005/track-location/' . $uri, $body);
            $response = $request->getBody();
            $data = json_decode($response, true);
            return $data;
            
        } catch (Exception $e) {
            return 'Cek sinyal';
        }


    }
} 

if (!function_exists('guzzle_requestAnev')) {
    /**
     * function request
     * @param method    string
     * @param uri       string
     * @param header    array
     * 
     * return array data
     */
    function guzzle_requestAnev($method, $uri, $body)
    {
        try {
            $client = new Client();
            // $request = $client->request($method, 'http://localhost:3002/' . $uri, $body);
            $request = $client->request($method, 'http://k3ig20korlantas.id:3001/' . $uri, $body); 
            // $request = $client->request($method, 'http://34.143.227.90:3019/' . $uri, $body);
            $response = $request->getBody();
            $data = json_decode($response, true);
            return $data;
            
        } catch (Exception $e) {
            return 'Cek sinyal';
        }


    }
} 

if (!function_exists('guzzle_requestGpsId')) {
    /**
     * function request
     * @param method    string
     * @param uri       string
     * @param header    array
     * 
     * return array data
     */
    function guzzle_requestGpsId($method, $uri, $body)
    {
        try {
            $client = new Client();
            $request = $client->request($method, 'https://svc-siwalpjr.gps.id/' . $uri, $body); 
            $response = $request->getBody();
            $data = json_decode($response, true);
            return $data;
            
        } catch (Exception $e) {
            return 'Cek sinyal';
        }


    }
}
