<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gpsid extends MX_Controller
{


    public function __construct()
    {
        parent::__construct(); 
    }
    public function index()
    {
        // $json_string = file_get_contents('php://input');
        // $param = json_decode($json_string);


        
        
        // $data = file_get_contents('php://input');
        // $param = json_decode($data, true);

        // $VehicleId = $param->VehicleId; //862476051307543
        // $VehicleNumber = $param->VehicleNumber; //b 1925 WKX
        // $DatetimeUTC = $param->DatetimeUTC; 
        // $GpsLocation = $param->GpsLocation;
        // $Lon = $param->Lon;
        // $Lat = $param->Lat;
        // $Speed = $param->Speed;
        // $Direction = $param->Direction;
        // $Engine = $param->Engine;
        // $Odometer = $param->Odometer;
        // $Car_status= $param->Car_status;
  
        // $dummy['VehicleId'] = $param->VehicleId;
        // $dummy['VehicleNumber'] = $param->VehicleNumber; 

        
        
        header("Access-Control-Allow-Headers: Authorization, Content-Type");
        header("Access-Control-Allow-Origin: *");
        header('content-type: application/json; charset=utf-8');
        
        $data = file_get_contents('php://input');
        $param = json_decode($data);
        $file = './dataVendor/gpsId.json'

        $change1 = str_replace('}','}],',$data);
        $change2 = str_replace('{','[{',$change1);
        // print_r($param);
        // if (unlink($file)) {
        //     // file was successfully deleted
        //     file_put_contents($file, $change2, FILE_APPEND);
        // } else {
        //     // there was a problem deleting the file
        //     file_put_contents($file, $change2, FILE_APPEND);
        // }
        file_put_contents($file, $change2, FILE_APPEND);
        $ini1 = file_get_contents($file);  
        echo $ini1;
        die;

        // $this->load->view('gpsId', );
    }
     
}
