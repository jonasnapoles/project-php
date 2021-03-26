<?php

/*LLAMADA A LA PANTALLA
----------------------------------------------------------------------------------*/
class MvcController{
    
    public function plantilla(){ include "views/template.php"; }

/*BLOCK INTERACION DE USUARIO
----------------------------------------------------------------------------------*/
public function enlacesPaginasController(){

    if(isset($_GET["action"])){ $enlacesController = $_GET["action"]; }
    else{ $enlacesController = "index"; }

    #echo $enlacesController;
    $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController); 

    include $respuesta;
  }
}
?>