<!-- sesion en mayuscula porque si se usa minuscula es una palabra reservada -->
<!-- para que verifique si el usuario esta o no conectado 
es para cuando hago el login y este ahí, nos devuelva una respuesta satisfactoria
 que nos permita iniciar la sesión. La sesión es un espacio temporal
 que se va a crear en el código para indicarle al usuario que si está cumpliendo
 con ciertas reglas, a través de la session podemos decirle al usuario usted está 
 o no está autenticado. 
-->

<?php

class Session{
    function __construct(){

    }
    function connectionSession(){
        if(!isset($_SESSION)){
            session_start();
        }  
    }

    function isAuthenticated()
    {
      if (isset($_SESSION['id'])) {
        return true;
      } else {
        return false;
      }
    }

}



?>