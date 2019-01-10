<?php namespace Views;

    $template = new Template();
    class Template{

         public function __construct(){
?>
<!DOCTYPE html>
<html>
  <head>
  	  <title>Manejo de Archivos</title>
  	  <meta charset="UTF-8">
  </head>
 <body>
<?php
         }


         public function __destruct(){
?>
  <hr>
  <footer>
  	   Maximo Junior Moreno Perez<br>
  	     maximitomilex || &copy
  </footer>
 </body>
</html>
<?php
         }
}


?>