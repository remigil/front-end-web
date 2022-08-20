<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!isset($this->session->userdata['logged'])){
    redirect('login');
}else{
    $authLogin = [
        [
            'name' => 'username',
            'contents' => 'admin'
        ],
        [
            'name' => 'password',
            'contents' => '1legalitas!!',
        ]
    ];

    $client = new \GuzzleHttp\Client();
    $request = $client->request('POST','http://localhost:3001/v1/auth/login',[
        'multipart' => $authLogin
    ]);
    $response = $request->getBody();
    $cek = json_decode($response, true);
     
    if($cek['isSuccess'] != true)
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}