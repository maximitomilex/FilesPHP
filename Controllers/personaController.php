<?php namespace Controllers;
 
   use Models\Persona as Persona;

    class personaController{

    	 private $persona;//Colaborador de clase
           
         public function __construct(){
             $this->persona = new Persona();
         }


         public function agregar(){
           if($_POST){
                $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
                $limite=700;

                if(in_array($_FILES['imagen']['type'],$permitidos) && $_FILES['imagen']
                   ['size']<=$limite*1024){

                    $nombre= date("is").$_FILES['imagen']['name'];
                    $ruta="Views". DS ."Template" . DS ."imagenes" . DS . $nombre;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

                    $this->persona->set("nombre", $_POST['nombre']);
                    $this->persona->set("apellido", $_POST['apellido']);
                    $this->persona->set("dni", $_POST['dni']);
                    $this->persona->set("imagen", $nombre);
                    $this->persona->add();
                }
                

           }
     
         } 


         
         
    }

?>