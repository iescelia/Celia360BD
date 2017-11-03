<?php
    // Este es el controlador de la aplicación
    include("vista.php");
    include("usuario.php");

    if (isset($_REQUEST["accion"]))
        $accion = $_REQUEST["accion"];
    else
        $accion = "showLoginForm";  // Acción por defecto

    $usuario = new Usuario();
        
    switch ($accion) {
        
        case "showLoginForm":
          
        break;
        
        case :
          
        break;
        
        case :
          ;
        break;
        
        case :
     
        break;
        
        case :

        break;
        
        case :

           

        break;

        case :
          
        break;


    }
?>
