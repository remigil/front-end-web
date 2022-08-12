<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!isset($this->session->userdata['logged'])){
    redirect('login');
}else{
    // $client = new \GuzzleHttp\Client();
    // $request = $client->request('POST','http://103.158.196.31/serverArc/auth/verify',[
    //     'headers' => [
    //         'Token' => $this->session->userdata['token']
    //     ]
    // ]);
    // $response = $request->getBody();
    // $cek = json_decode($response, true);
     
    // if($cek['status'] != 200)
    // {
    //     $this->session->sess_destroy();
    //     redirect(base_url('login'));
    // }
}