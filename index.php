<?php

require_once "Config/Autoload.php";
Config\Autoload::Run();
  
$persona = new Models\Persona();
$dato=$persona->viewWhere("nombre","Junior");
echo $dato["nombre"];

?>
