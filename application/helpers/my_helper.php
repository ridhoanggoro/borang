<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('random')){
   function random(){
         $number = rand(1111,9999);
         return $number;
       }
   }

if ( ! function_exists('current_utc_date_time')){
   function current_utc_date_time(){
         $dateTime = gmdate("Y-m-d\TH:i:s\Z");;
         return $dateTime;
       }
   }


   if ( ! function_exists('encode_url')){
      function encode_url($string) {
   
         $output = false;
         /*
         * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
         */        
         $security       = parse_ini_file("security.ini");
         $secret_key     = $security["encryption_key"];
         $secret_iv      = $security["iv"];
         $encrypt_method = $security["encryption_mechanism"];
      
         // hash
         $key    = hash("sha256", $secret_key);
      
         // iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
         $iv     = substr(hash("sha256", $secret_iv), 0, 16);
      
         //do the encryption given text/string/number
         $result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
         $output = base64_encode($result);
         return $output;
      }
   }
   
   if ( ! function_exists('decode_url')){
      function decode_url($string) {
         /*
         * decryption process
         *
         *
         */
   
         $output = false;
         /*
         * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code
         */
      
         $security       = parse_ini_file("security.ini");
         $secret_key     = $security["encryption_key"];
         $secret_iv      = $security["iv"];
         $encrypt_method = $security["encryption_mechanism"];
      
         // hash
         $key    = hash("sha256", $secret_key);
      
         // iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
         $iv = substr(hash("sha256", $secret_iv), 0, 16);
      
         //do the decryption given text/string/number
      
         $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
         return $output;
      }
   }
   
   if (!function_exists('date_sql')) {
      function date_sql($string){
         $newdate = date("Y-m-d", strtotime($string));   
         return($newdate);
      }
   }
   
   if ( ! function_exists('clean_format')){
      function clean_format($string){
         $clean_string = str_replace(',', '', $string);
         return $clean_string;
      }
   }
   
   if ( ! function_exists('format_angka')){
      function format_angka($string){
         $angka = number_format($string, 2);
         return $angka;
      }
   }
   
   if ( ! function_exists('persentase')){
      function persentase($number, $divider){
         if ($number != 0) {
            $persen = number_format(($number / $divider) * 100, 2);
         }
         else {
            $persen = 0.0;
         }
         return $persen;
      }
   }
   
   if (!function_exists('tanggal_indo')) {
      function tanggal_indo($tanggal){
         $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
         );
         $pecahkan = explode('-', $tanggal);
         
         // variabel pecahkan 0 = tanggal
         // variabel pecahkan 1 = bulan
         // variabel pecahkan 2 = tahun
       
         $result = $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
         return $result;
      }
   }
