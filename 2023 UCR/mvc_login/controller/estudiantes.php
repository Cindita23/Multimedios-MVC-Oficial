<?php
include_once 'class/misc.php';

class Estudiantes extends Controller{
    function __construct(){//inicializo mi contructor 
        parent::__construct();//inicializo el controlador para tener acceso a la funciones que tiene el controller
        parent::connectionSession();//para que la session funcione para cuando se esté autenticado 

        $this->view->datos = [];//no se que va a venir en la vista, pero se que me van a enviar un arreglo 
        $this->view->grupos = [];
        $this->view->mensaje = "Sección Estudiantes";
        $this->view->mensajeResultado = "";        
    }
    
    //nos permite extraer info de lo que estamos trayendo en ese momento 
    function render(){
        if (!parent::isAuthenticated()) {
            // Redirigir al inicio de sesión o mostrar un mensaje de error
            header("Location: " . constant('URL') . "usuarios/verLogin");
            exit();
          }
        $datos = $this->model->getEstudiantes();           
        //var_dump($datos); //para comprobar que está trayendo todo el objeto       
        $this->view->datos = $datos;//para que cuando se cargue la página me mande todo el arreglo       
        $this->view->render('estudiantes/index');//lo mandamos a la página para que se muestre 
    }    

    function crear(){   //para ver la vista                   
        $this->view->datos = [];
        $grupos = $this->model->getGruposNombre();   
        $this->view->grupos = $grupos;    
        $this->view->mensaje = "Crear Estudiantes";
        $this->view->render('estudiantes/crear');
    }

    function insertarEstudiante(){
        //var_dump($_POST);
        $mensajePersonalizado = new Misc();

        if ($this->model->insertarEstudiante($_POST)){//todo lo que venga en el POST lo vamos a enviar 
            $mensajeResultado = $mensajePersonalizado->mensajeExitosoInsertar;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeErrorInsertar;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    function detalle(){                      
        $this->view->datos = [];
        $this->view->mensaje = "Detalles de los Estudiantes";
        $this->view->render('estudiantes/detalle');
    }

    ///////////////////////////////////////////////////////////tercer video 
    
    //recibe los parámetros, no sabe cuales, pero si no vienen que los inicialice en blanco   
    function verEstudiantes( $param = null ){        
        $id = $param[0];//obtiene id a través de los parámetros 

        $datos = $this->model->verEstudiantes($id);   //trae toda la info      
        $this->view->datos = $datos; //enviamos los datos del curso consultado 
        $this->view->mensaje = "Detalle Estudiante";        
        $grupos = $this->model->getGruposNombre();   
        $this->view->grupos = $grupos;
        $this->view->render('estudiantes/detalle');//carga la info 
    }

    //actualizarcurso
    function actualizarEstudiante(){
        //var_dump($_POST);
        $mensajePersonalizado = new Misc();

        if ($this->model->actualizarEstudiante($_POST)){

            $datos = new classEstudiantes();            

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = $mensajePersonalizado->mensajeActualizarExitoso;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeActualizarError; 
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Estudiante";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }    

    //eliminarcurso
    function eliminarEstudiante( $param = null ){   
        $id = $param[0];
        $mensajePersonalizado = new Misc();

        if ($this->model->eliminarEstudiante($id)){
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarExitoso; 
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarError;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

}