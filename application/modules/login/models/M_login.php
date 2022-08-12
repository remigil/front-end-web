<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    private $app_id = 'gutam';
    private $passwd = '12345';

    public function __construct(){
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }
    public function auth($username,$password)
    {
        $authLogin = [
            [
                'name' => 'app_id',
                'contents' => $this->app_id,
            ],
            [
                'name' => 'password',
                'contents' => $this->passwd,
            ]
        ];
        $data = guzzle_request('POST','auth/login',[
            'multipart' => $authLogin
        ]);
        $token = $data['data']['token'];

        if($token){
            $parts = [
                [
                    'name' => 'user_name',
                    'contents' => $username,
                ],
                [
                    'name' => 'password',
                    'contents' => $password,
                ]
            ];
            $user = guzzle_request('POST', 'login/authLogin', [
                'multipart' => $parts, 
                'headers' => [
                    'Token' => $token
                ]
            ]); 
        }

        $data['token'] = $token;
        $data['user'] = $user;
        return $data;
    }
}
