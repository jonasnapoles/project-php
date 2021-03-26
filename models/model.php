<?php

class EnlacesPaginas{
    #funsion static com (paramentos)
    public static function enlacesPaginasModel($enlacesModel){

        if(
           $enlacesModel == "nosotros" ||
           $enlacesModel == "servicios" ||
           $enlacesModel == "contactos"){
        
            $module = "views/modules/".$enlacesModel.".php";
            
        }
        else if($enlacesModel == "index"){ $module = "views/modules/inicio.php"; }
        
        else{ $module = "views/modules/inicio.php"; }

        return $module; 
    }
}
?>