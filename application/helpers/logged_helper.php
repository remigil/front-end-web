<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!isset($this->session->userdata['logged'])) {
    redirect('login');
} else {

    $headers = [
        'Authorization' => $this->session->userdata['token'],
    ];

    $client = new \GuzzleHttp\Client();
<<<<<<< HEAD
    $request = $client->request('POST','http://localhost:3001/v1/auth/validate_login',[
        'headers' => $headers 
=======
    $request = $client->request('POST', 'http://k3ig20korlantas.id:3001/v1/auth/validate_login', [
        'headers' => $headers
>>>>>>> b6fae5d2c8c1931328236c6cadf30f24e5f595d8
    ]);
    $response = $request->getBody();
    $cek = json_decode($response, true);

    if ($cek['data']['success'] != true) {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
