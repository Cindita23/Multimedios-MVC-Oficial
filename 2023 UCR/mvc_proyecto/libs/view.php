<?php
//clase que permite el redireccionamiento entre las vistas 
class view {

    function __construct()
    {
        
    }

    //nosotros las vamos a llamar dinámicamente, 
    //por lo que no me interesa saber el nombre de ninguna, 
    //porque todas van a ser autogeneradas
    //la palabra render significa que nos va a mandar hacia algún lugar, 
    //o va a renderizar algún elemento o va a extraer información 
    function render($nombre){
        require 'view/'.$nombre.'.php';
    }
}


?>