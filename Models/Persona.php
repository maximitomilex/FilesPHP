<?php namespace Models;

   class Persona{
        
        private $id_persona;
        private $nombre;
        private $apellido;
        private $dni;
        private $imagen;
        //Colaborador de la clase
        private $con;

        public function __construct(){
        	$this->con= new Conexion();
        }

        public set($atributo, $valor){
        	$this->$atributo=$valor;
        }

        public get($atributo){
        	return $this->$atributo;
        }

        public function add(){
        	$sql="INSERT INTO Personas VALUES(null, '{$this->nombre}', '{$this->apellido}', '{$this->dni}', '{$this->imagen}');";
        	$this->con->consultaSimple($sql);
        }

        public function edit(){
        	$sql="UPDATE Personas SET nombre='{$this->nombre}', apellido='{$this->apellido}, dni='{$this->dni}', imagen='{$this->imagen}';";
        	$this->con->consultaSimple($sql);
        }
        
        public function delete(){
        	$sql="DELETE FROM Personas WHERE id='{$this->dni}';";
        	$this->con-consultaSimple($sql);
        }

        public function view(){
        	$sql="SELECT * FROM Personas;";
        	$datos = $this->con->consultaRetorno($sql);
        	return $datos;
        }

        public function viewWhere($column, $valor){
        	$sql="SELECT * FROM Personas WHERE ".$column."="."'{$valor}';";
        	$datos=$this->con->consultaRetorno($sql);
        	return $datos;
        }


   }

?>