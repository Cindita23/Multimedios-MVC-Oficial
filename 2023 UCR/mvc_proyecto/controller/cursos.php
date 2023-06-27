<?php
include_once 'class/misc.php';

class Cursos extends Controller{
    function __construct(){//inicializo mi contructor 
        parent::__construct();//inicializo el controlador para tener acceso a la funciones que tiene el controller
        parent::connectionSession();//para que la session funcione para cuando se esté autenticado 

        $this->view->datos = [];//no se que va a venir en la vista, pero se que me van a enviar un arreglo 
        $this->view->mensaje = "Sección Cursos";
        $this->view->mensajeResultado = "";        
    }
    
    //nos permite extraer info de lo que estamos trayendo en ese momento 
    function render(){
        $datos = $this->model->getCursos();       
        //var_dump($datos); //para comprobar que está trayendo todo el objeto       
        $this->view->datos = $datos;//para que cuando se cargue la página me mande todo el arreglo
        $this->view->render('cursos/index');//lo mandamos a la página para que se muestre 
    }
    

    function crear(){   //para ver la vista                   
        $this->view->datos = [];
        $this->view->mensaje = "Crear Cursos";
        $this->view->render('cursos/crear');
    }

    function insertarCurso(){
        //var_dump($_POST);
        $mensajePersonalizado = new Misc();

        if ($this->model->insertarCurso($_POST)){//todo lo que venga en el POST lo vamos a enviar 
            $mensajeResultado = $mensajePersonalizado->mensajeExitosoInsertar;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeExitosoInsertar;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    function detalle(){                      
        $this->view->datos = [];
        $this->view->mensaje = "Detalles de los Cursos";
        $this->view->render('cursos/detalle');
    }

    ///////////////////////////////////////////////////////////tercer video 
    
    //recibe los parámetros, no sabe cuales, pero si no vienen que los inicialice en blanco   
    function verCursos( $param = null ){        
        $id = $param[0];//obtiene id a través de los parámetros 

        $datos = $this->model->verCursos($id);   //trae toda la info      
        $this->view->datos = $datos; //enviamos los datos del curso consultado 
        $this->view->mensaje = "Detalle Curso";
        $this->view->render('cursos/detalle');//carga la info 
    }

    //actualizarcurso
    function actualizarcurso(){
        //var_dump($_POST);
        $mensajePersonalizado = new Misc();

        if ($this->model->actualizarcurso($_POST)){

            $datos = new classCursos();            

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = $mensajePersonalizado->mensajeActualizarExitoso;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeActualizarError; 
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Curso";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->view->render('cursos/detalle');
    }    

    //eliminarcurso
    function eliminarcurso( $param = null ){   
        $id = $param[0];
        $mensajePersonalizado = new Misc();

        if ($this->model->eliminarcurso($id)){
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarExitoso; 
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarError;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

}
