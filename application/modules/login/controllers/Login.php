<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('login/m_login');
    }
    public function index()
    {
        if (isset($this->session->userdata['logged'])) {
            redirect('/dashboard');
        } else {
            $data['captcha'] = $this->recaptcha->getWidget();
            $data['script_captcha'] = $this->recaptcha->getScriptTag();
            $this->load->view('login_view');
        }
    }

    public function operator()
    {
        if (isset($this->session->userdata['logged'])) {
            redirect('/dashboard');
        } else {
            $this->load->view('login_view_operator');
        }
    }
    public function auth($sess = null)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tokenNotif = $this->input->post('token');

        $recaptcha = $this->input->post('g-recaptcha-response');
        $recaptcha = $this->recaptcha->verifyResponse($recaptcha);
        if (!isset($recaptcha['success']) || $recaptcha['success'] <> true) {
            $this->index();
        } else {
            $response = $this->m_login->auth($username, $password);
        }



        
        // print_r($response);
        // die;
        if ($response['user']['isSuccess'] == true) {

            if ($response['user']['data']['status_verifikasi'] == 1) {
                $data_session  = array();
                $data_session['role']       = $response['user']['data']['user_role']['name'];
                $data_session['id'] = $response['user']['data']['id'];
                $data_session['operation_id']       = $response['user']['data']['operation_id'];
                $data_session['full_name']       = $username;
                $data_session['token']       = $response['token'];
                $data_session['tokenFcm']       = $tokenNotif;
                $data_session['logged']       = 1;

                
                $headers = [
                    'Authorization' => $response['token'],
                ];
                $operationProfile = guzzle_request('GET', 'operation-profile/mobile', [
                    'headers' => $headers
                ]); 

                if($response['user']['data']['user_role']['name'] == 'G20' && $operationProfile['isSuccess'] == true){
                    $data_session['id_operation']       = $operationProfile['data']['id_operation'];
                    $data_session['banner']       = $operationProfile['data']['banner'];
                    $data_session['name_operation']       = $operationProfile['data']['name_operation'] ? $operationProfile['data']['name_operation'] : 'Tidak Ada';
                    $data_session['document_sprint']       = $operationProfile['data']['document_sprint'];
                    $data_session['background_image']       = $operationProfile['data']['background_image'];
                    $data_session['logo']       = $operationProfile['data']['logo'];
                    $data_session['latlng_center']       = $operationProfile['data']['latlng_center'] ? $operationProfile['data']['latlng_center'] : '-0.21973, 117.91602';
                    $data_session['zoom_level']       = $operationProfile['data']['zoom_level'] ? $operationProfile['data']['zoom_level'] : 5.5;
                    $data_session['date_start_operation']       = $operationProfile['data']['date_start_operation'];
                    $data_session['date_end_operation']       = $operationProfile['data']['date_end_operation'];  
                }else{
                    $data_session['id_operation']       = null;
                    $data_session['banner']       = null;
                    $data_session['name_operation']       = 'Tidak Ada';
                    $data_session['document_sprint']       = null;
                    $data_session['background_image']       = null;
                    $data_session['logo']       = null;
                    $data_session['latlng_center']       = '-0.21973, 117.91602';
                    $data_session['zoom_level']       = 5.5;
                    $data_session['date_start_operation']       = null;
                    $data_session['date_end_operation']       = null;  
                }

                 

                if ($response['user']['data']['user_role']['name'] == 'OperatorPolda' || $response['user']['data']['user_role']['name'] == 'Kapolda') {
                    $data_session['polda']       = $response['user']['data']['polda_profile']['polda']['name_polda'];

                    $data_session['polda_id'] = $response['user']['data']['polda_profile']['polda']['id'];
                    $data_session['id_polda'] = $response['user']['data']['polda_profile']['polda_id'];


                    if ($response['user']['data']['polda_profile'] == null || $response['user']['data']['polda_profile'] == null) {
                        $this->session->set_flashdata('error', 'Mohon untuk hubungi admin karna Polda Belum di Daftarkan');
                        redirect('login');
                        die;
                    }
                }

                if ($response['user']['data']['user_role']['name'] == 'OperatorPolres' || $response['user']['data']['user_role']['name'] == 'Kapolres') {
                    $data_session['polres_id'] = $response['user']['data']['polres_profile']['polres']['id'];
                    $data_session['id_polres'] = $response['user']['data']['polres_profile']['polres_id'];
                    $data_session['polres']       = $response['user']['data']['polres_profile']['polres']['name_polres'];
                    $data_session['polda_id']       = $response['user']['data']['polres_profile']['polres']['polda']['id'];
                    // $data_session['polda_id'] = $response['user']['data']['polda_profile']['poldaid'];
                    if ($response['user']['data']['polres_profile'] == null || $response['user']['data']['polres_profile'] == null) {
                        $this->session->set_flashdata('error', 'Mohon untuk hubungi admin karna Polres Belum di Daftarkan');
                        redirect('login');
                        die;
                    }
                }

                $this->session->set_userdata($data_session);

                $headers = [
                    'Authorization' => $response['token'],
                ];
                $dummy = [
                    [
                        'name' => 'token_notif',
                        'contents' => $tokenNotif,
                    ],
                ];
                // $data = guzzle_request('PUT', 'user/edit/' . $response['user']['data']['id'] . '', [
                //     'multipart' => $dummy,
                //     'headers' => $headers
                // ]);


                // if ($data['isSuccess'] == true) {
                    if ($response['user']['data']['user_role']['name'] == "Kakor" || $response['user']['data']['user_role']['name'] == "PJU") {
                        redirect(base_url('dashboard?start_date=' . date("Y-m-d") . '&end_date=' . date("Y-m-d") . ''));
                    } else if ($response['user']['data']['user_role']['name'] == "OperatorPolda" || $response['user']['data']['user_role']['name'] == "OperatorPolres" || $response['user']['data']['user_role']['name'] == "OperatorKorlantas" || $response['user']['data']['user_role']['name'] == "Korlantas") {
                        redirect(base_url('inputdata/LaporanHarian'));
                    } else if ($this->session->userdata['role'] == 'Kakorlantas' || $this->session->userdata['role'] == 'Ditkamsel'  || $this->session->userdata['role'] == 'Ditgakkum' || $this->session->userdata['role'] == 'Ditregident' || $this->session->userdata['role'] == 'KaBagOps' || $this->session->userdata['role'] == 'KaBagRenmin' || $this->session->userdata['role'] == 'KaBagTIK') {
                        redirect(base_url('dashboard')); 
                    } else {
                        redirect(base_url('dashboard'));
                    }
                // } else {
                //     $this->session->set_flashdata('error', 'Mohon untuk periksa kembali jaringan anda!');
                //     redirect('login');
                //     die;
                // }
            } else { 
                $this->session->set_flashdata('error', 'Mohon untuk verifikasi akun anda!');
                redirect('login');
                die;
            }

 

        } else {

             
            $this->session->set_flashdata('error', 'Akun tidak terdaftar!');
            redirect('login');
            die; 
        }
    }

    public function gpsid()
    {
        $json_string = file_get_contents('php://input');
        $param = json_decode($json_string);


        $VehicleId = $param->VehicleId; //862476051307543
        $VehicleNumber = $param->VehicleNumber; //b 1925 WKX
        $DatetimeUTC = $param->DatetimeUTC;
        $GpsLocation = $param->GpsLocation;
        $Lon = $param->Lon;
        $Lat = $param->Lat;
        $Speed = $param->Speed;
        $Direction = $param->Direction;
        $Engine = $param->Engine;
        $Odometer = $param->Odometer;
        $Car_status = $param->Car_status;


        echo $json_string;
        //- 
        // file_put_contents('./gpsId_'.date("j.n.Y").'.json', $json_string, FILE_APPEND);

        $this->load->view('gpsId');
    }

    public function forgot_password()
    {
        $this->load->view('login/forgot_password');
    }

    public function send_forgot_password()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        $dummy = [
            [
                'name' => 'email',
                'contents' => $input['email'],
            ],
        ];





        $data = guzzle_request('POST', 'auth/forgot_password', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);

        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Link reset password berhasil dikirim, silahkan cek email',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Email tidak terdaftar',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function reset_password($id)
    {

        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];

        $getDetail = guzzle_request('GET', 'check-user/getId/' . $id . '', [
            'headers' => $headers
        ]);


        if ($getDetail['isSuccess'] == false) {
            $this->load->view('404_notfound');
        } else {
            $this->load->view('login/reset_password', ['id' => $id]);
        }
    }


    public function send_reset_password()
    {
        $headers = [
            'Authorization' => $this->session->userdata['token'],
        ];
        $input      = $this->input->post();

        $dummy = [
            [
                'name' => 'id',
                'contents' => $input['id'],
            ],
            [
                'name' => 'password',
                'contents' => $input['kata_sandi']
            ]
        ];





        $data = guzzle_request('POST', 'auth/reset_password', [
            'multipart' => $dummy,
            'headers' => $headers
        ]);



        if ($data['isSuccess'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Password berhasil diganti, silahkan login !',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Passowrd gagal diganti',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
