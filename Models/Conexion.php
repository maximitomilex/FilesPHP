<?php namespace Models;

    class Conexion{

        private $datos = array(
          "host"=>"localhost",
          "user"=>"root",
          "pass"=>"",
          "db"=>"Persona");
        private $con;

        public function __construct(){
            $this->con= new\mysqli($datos["host"], $datos["user"], $datos["pass"],
             $datos["db"]);
        }

        public function consultaSimple($sql){
        	$this->con->query($sql);
        }

        public function consultaRetorno($sql){
            $datos=$this->con->query($sql);
            return $datos;
        }

    }

?