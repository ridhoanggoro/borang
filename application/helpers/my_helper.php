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
   function encode_url($value){
         $CI =& get_instance();
         $CI->load->library('encrypt');
         $enc_value=$CI->encrypt->encode($value);
         $enc_value=str_replace(array('+', '/', '='), array('-', '_', '~'), $enc_value);
         return $enc_value;
       }
   }


if ( ! function_exists('decode_url')){
   function decode_url($value){
         $CI =& get_instance();
         $CI->load->library('encrypt');
         $dec_value=str_replace(array('-', '_', '~'), array('+', '/', '='), $value);
         $dec_value=$CI->encrypt->decode($dec_value);
         return $dec_value;
       }
   }
