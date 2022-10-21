<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{


    public function __construct()
    {
        parent::__construct(); 
    }
    public function index()
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
 

        echo $json_string; 
        //- 
        file_put_contents('./gpsId.json', $json_string, FILE_APPEND);

        $this->load->view('gpsId');
    }
     
}
