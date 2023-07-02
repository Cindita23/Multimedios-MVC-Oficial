<?php
include_once 'class/misc.php';

class Login extends Controller{
    function __construct(){//inicializo mi contructor 
        parent::__construct();//inicializo el controlador para tener acceso a la funciones que tiene el controller
        parent::connectionSession();//para que la session funcione para cuando se esté autenticado 

        // $this->view->datos = [];//no se que va a venir en la vista, pero se que me van a enviar un arreglo 
        // $this->view->mensaje = "Inicio de sesion";
              
    }
    
    //nos permite extraer info de lo que estamos trayendo en ese momento 
    function render(){
        // $datos = $this->model->getCursos();       
        // //var_dump($datos); //para comprobar que está trayendo todo el objeto       
        // $this->view->datos = $datos;//para que cuando se cargue la página me mande todo el arreglo
        
        $this->view->render('login/index');//lo mandamos a la página para que se muestre 
    }

}
?>