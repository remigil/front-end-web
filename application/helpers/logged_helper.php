<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!isset($this->session->userdata['logged'])) {
    redirect('login');
} else {

    $headers = [
        'Authorization' => $this->session->userdata['token'],
    ];
 
    $client = new \GuzzleHttp\Client();
    $request = $client->request('POST', 'http://localhost:3001/v1/auth/validate_login', [
    // $request = $client->request('POST', 'http://k3ig20korlantas.id:3001/v1/auth/validate_login', [
        'headers' => $headers 
    ]);
    $response = $request->getBody();
    $cek = json_decode($response, true);

    if ($cek['data']['success'] != true) {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
