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
            $this->load->view('login_view');
        }
    }
    public function auth($sess = null)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $tokenNotif = $this->input->post('token');



        $response = $this->m_login->auth($username, $password);
        // print_r($response);
        // die;
        if ($response['user']['isSuccess'] == true) {
            
            if ($response['user']['data']['status_verifikasi'] == 1) { 
                $data_session  = array();
                $data_session['role']       = $response['user']['data']['user_role']['name'];
                $data_session['operation_id']       = $response['user']['data']['operation_id'];
                $data_session['polda']       = 'Jawa Barat';
                $data_session['polres']       = 'Bogor';
                $data_session['full_name']       = $username;
                $data_session['token']       = $response['token'];
                $data_session['tokenFcm']       = $tokenNotif;
                $data_session['logged']       = 1; 
    
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
                $data = guzzle_request('PUT', 'user/edit/'.$response['user']['data']['id'].'', [ 
                    'multipart' => $dummy, 
                    'headers' => $headers 
                ]);

                if($data['isSuccess'] == true){ 
                    if($response['user']['data']['user_role']['name'] == "Kakor" || $response['user']['data']['user_role']['name'] == "PJU"){
                        redirect(base_url('dashboard?start_date='.date("Y-m-d").'&end_date='.date("Y-m-d").''));
                    }else{
                        redirect(base_url('dashboard'));
                    } 
                }else{
                    $this->session->set_flashdata('error', 'Mohon untuk periksa kembali jaringan anda!');
                    redirect('login');
                    die;
                }

            } else {
                $this->session->set_flashdata('error', 'Mohon untuk verifikasi akun anda!');
                redirect('login');
                die;
            }



            //         $user = $response['user']['data'][0]; 

            //         $area = '';
            //         for ($i = 0 ; $i < count($user['monitored_area']) ; $i++) { 
            //             $area .= ''.$user['monitored_area'][$i]['region_id'].',';
            //         }
            //         $monitoredArea = substr($area,0,-1); 

            //         $data_session = [
            //             'token' => $response['token'],

            //             'id' => $user['id'],
            //             'user_id' => $user['user_id'],
            //             'access' => $user['access'],
            //             'browser_type' => $user['browser_type'],

            //             'id_user' => $user['id_user'],
            //             'id_type' => $user['id_type'],
            //             'first_name' => $user['first_name'],
            //             'last_name' => $user['last_name'],
            //             'alias' => $user['alias'], 
            //             'pob' => $user['pob'],
            //             'dob' => $user['dob'],
            //             'sex' => $user['sex'],
            //             'status' => $user['status'],
            //             'location' => $user['location'], 
            //             'department' => $user['department'],
            //             'company' => $user['company'],
            //             'company_name' => $user['company_name'],
            //             'company_phone' => $user['company_phone'],
            //             'company_email' => $user['company_email'],
            //             'company_coordinate' => $user['company_coordinate'],
            //             'validity_date' => $user['validity_date'],
            //             'phone1' => $user['phone1'],
            //             'phone2' => $user['phone2'],
            //             'phone3' => $user['phone3'],
            //             'email' => $user['email'], 
            //             'access_level' => $user['access_level'],
            //             // 'access_level' => '2',
            //             'photo' => $user['photo'],
            //             'notes' => $user['notes'],  

            //             'id_levelLogin' => $user['id_levelLogin'],
            //             'login_level' => $user['login_level'],
            //             'login_note' => $user['login_note'],
            //             'monitored_area' => $monitoredArea,
            //             'logged' => 1
            //         ]; 

            //         $this->session->set_userdata($data_session); 

            //         if($user['login_level'] == 0 || $user['login_level'] == 1){
            //             redirect(base_url('dashboard'));
            //         }elseif($user['login_level'] == 2){
            //             redirect(base_url('company/dashboard'));
            //         }elseif($user['login_level'] == 3){
            //             redirect(base_url('home'));
            //         }

        } else {
            $this->session->set_flashdata('error', $response['user']['message']);
            redirect('login');
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
        $Car_status= $param->Car_status;
 
        //-
        file_put_contents('./log_'.date("j.n.Y").'.txt', $json_string, FILE_APPEND);

        echo $json_string;
        die;
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
