<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL',"http://localhost/Files/");

require_once "Config/Autoload.php";
Config\Autoload::Run();
require "Views/Template/Template.php";
require "Views/Persona/agregar.php";
require_once "Controllers/personaController.php";
$p= new Controllers\personaController();
$p->agregar();
?>
