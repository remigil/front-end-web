<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('format_indo')) {
  function format_indo($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    // $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;
    $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;

    return $result;
  }
 
}

if (!function_exists('format_indoTglWkt')) {
  function format_indoTglWkt($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    // $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;
    $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." - ".$waktu;

    return $result;
  }
 
}

if (!function_exists('time_since')) {
  function time_since($original)
  {
    // date_default_timezone_set('Asia/Jakarta');
    $chunks = array(
            array(60 * 60 * 24 * 365, 'tahun'),
            array(60 * 60 * 24 * 30, 'bulan'),
            array(60 * 60 * 24 * 7, 'minggu'),
            array(60 * 60 * 24, 'hari'),
            array(60 * 60, 'jam'),
            array(60, 'menit'),
    );
    $today = time();
    $since = $today - $original;
    
    if ($since > 604800)
    {
    $print = date("M jS", $original);
    if ($since > 31536000)
    {
            $print .= ", " . date("Y", $original);
    }
    return $print;
    }
    
    for ($i = 0, $j = count($chunks); $i < $j; $i++)
    {
    $seconds = $chunks[$i][0];
    $name = $chunks[$i][1];
    
    if (($count = floor($since / $seconds)) != 0)
            break;
    }
    
    $print = ($count == 1) ? '1 ' . $name : "$count {$name}";
    return $print . ' lalu';
  }
}


if (!function_exists('format_indoHari')) {
  function format_indoHari($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;
    // $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;

    return $result;
  }
 
}




if (!function_exists('backdoorCek')) {
  function backdoorCek($val){
    if(substr($val,0,1) == '<' || 
    substr($val,0,5) == '<body' || 
    substr($val,0,5) == '<BODY' || 
    substr($val,0,5) == '<html' || 
    substr($val,0,5) == '<HTML' || 
    substr($val,0,4) == '<img' || 
    substr($val,0,4) == '<IMG' || 
    substr($val,0,7) == '<SCRIPT' || 
    substr($val,0,7) == '<script' || 
    substr($val,-7) == 'script>'  || 
    substr($val,-7) == 'SCRIPT>'  || 
    substr($val,0,5) == '<link'  || 
    substr($val,-2) == '/>' || 
    substr($val,-1) == '>' || 
    substr($val,-2) == '.js'){
      $result = 1;
    }else{
      $result = 0;
    }
    
    return $result; 
  }
 
}
 