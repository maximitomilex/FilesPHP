<?php namespace Config;

   class Autoload{

       public static function Run(){
       	 spl_autoload_register(function($clase){
       	 	require_once $clase . ".php";
       	 });
       }

   }

?>