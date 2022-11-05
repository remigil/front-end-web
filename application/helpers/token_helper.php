<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

if (!function_exists('token')) {
    function token()
    {
        $client = new Client();  
        // $request = $client->request('POST', 'http://localhost:3001/v1/', [
        $request = $client->request('POST', 'http://k3ig20korlantas.id:3001/v1/', [ 
            'form_params' => [
                'username' => 'G20',
                'password' => 'a'
            ]
        ]);
        $response = $request->getBody();
        $data = json_decode($response, true);

        $result = $data['data']['token'];

        return $result;
    }
}
