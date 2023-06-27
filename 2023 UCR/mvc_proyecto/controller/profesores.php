<?php
include_once 'class/misc.php';

class Profesores extends Controller{
    function __construct(){//inicializo mi contructor 
        parent::__construct();//inicializo el controlador para tener acceso a la funciones que tiene el controller
        parent::connectionSession();//para que la session funcione para cuando se esté autenticado 

        $this->view->datos = [];//no se que va a venir en la vista, pero se que me van a enviar un arreglo 
        $this->view->grupos = [];
        $this->view->mensaje = "Sección Profesores";
        $this->view->mensajeResultado = "";        
    }
    
    //nos permite extraer info de lo que estamos trayendo en ese momento 
    function render(){
        $datos = $this->model->getProfesores();       
        //var_dump($datos); //para comprobar que está trayendo todo el objeto       
        $this->view->datos = $datos;//para que cuando se cargue la página me mande todo el arreglo
        $this->view->render('profesores/index');//lo mandamos a la página para que se muestre 
    }
    

    function crear(){   //para ver la vista                   
        $this->view->datos = [];
        $grupos = $this->model->getGruposNombre();   
        $this->view->grupos = $grupos;
        $this->view->mensaje = "Crear Profesores";
        $this->view->render('profesores/crear');
    }

    function insertarProfesor(){
        var_dump($_POST);
        $mensajePersonalizado = new Misc();

        if ($this->model->insertarProfesor($_POST)){//todo lo que venga en el POST lo vamos a enviar 
            $mensajeResultado = $mensajePersonalizado->mensajeExitosoInsertar;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeErrorInsertar;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    function detalle(){                      
        $this->view->datos = [];
        $this->view->mensaje = "Detalles de los Profesores";
        $this->view->render('profesores/detalle');
    }

    ///////////////////////////////////////////////////////////tercer video 
    
    //recibe los parámetros, no sabe cuales, pero si no vienen que los inicialice en blanco   
    function verProfesores( $param = null ){        
        $id = $param[0];//obtiene id a través de los parámetros 

        $datos = $this->model->verProfesores($id);   //trae toda la info      
        $this->view->datos = $datos; //enviamos los datos del curso consultado 
        $this->view->mensaje = "Detalle Profesor";
        $grupos = $this->model->getGruposNombre();   
        $this->view->grupos = $grupos;
        $this->view->render('profesores/detalle');//carga la info 
    }

    //actualizarcurso
    function actualizarProfesor(){
        //var_dump($_POST);
        $mensajePersonalizado = new Misc();

        if ($this->model->actualizarProfesor($_POST)){

            $datos = new classProfesores();            

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = $mensajePersonalizado->mensajeActualizarExitoso;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeActualizarError; 
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Profesor";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->view->render('profesores/detalle');
    }    

    //eliminarcurso
    function eliminarProfesor( $param = null ){   
        $id = $param[0];
        $mensajePersonalizado = new Misc();

        if ($this->model->eliminarProfesor($id)){
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarExitoso; 
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarError;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

}