<?php
/**
 * Created by PhpStorm.
 * User: elhabib
 * Date: 06/02/18
 * Time: 09:33 م
 */

namespace Framework\Security;


use Framework\Core\Config;

class ClinetInfo
{
    private $Ip;
    private $agnet;
    private $lang;
 public function __construct()
 {
 $this->agnet=new UserAgent();
     $this->Ip=self::get_ip();
     $this->lang=self::get_language();
 }
    private static function get_ip()
    {
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

     private function get_language(){
         preg_match("/^(?<lang>[a-z]{2})/i",$_SERVER["HTTP_ACCEPT_LANGUAGE"],$arry);
         return (in_array($arry["lang"],Config::LANGUAGE_SPORTED))?$arry["lang"]:Config::LANGUAGE_DEFAULT;
     }
}