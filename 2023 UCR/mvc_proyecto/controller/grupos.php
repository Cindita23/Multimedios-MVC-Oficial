
<?php
include_once 'class/misc.php';

class Grupos extends Controller{
    function __construct(){
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Seccion Grupos";
        $this->view->mensajeResultado = "";        
    }
    function render(){
        $datos = $this->model->getGrupos();               
        $this->view->datos = $datos;
        $this->view->render('grupos/index');
    }

    function crear(){   //para ver la vista                   
        $this->view->datos = [];
        $this->view->mensaje = "Crear Grupos";
        $this->view->render('grupos/crear');
    }

    function insertarGrupo(){
        //var_dump($_POST);
        $mensajePersonalizado = new Misc(); 

        if ($this->model->insertarGrupo($_POST)){
            $mensajeResultado = $mensajePersonalizado->mensajeExitosoInsertar;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeExitosoInsertar;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

    function detalle(){                      
        $this->view->datos = [];
        $this->view->mensaje = "Detalles de los grupos";
        $this->view->render('grupos/detalle');
    }

    ///////////////////////////////////////////////////////////tercer video 
    
    //recibe los parámetros, no sabe cuales, pero si no vienen que los inicialice en blanco   
    function verGrupos( $param = null ){        
        $id = $param[0];//obtiene id a través de los parámetros 

        $datos = $this->model->verGrupos($id);   //trae toda la info      
        $this->view->datos = $datos; //enviamos los datos del curso consultado 
        $this->view->mensaje = "Detalle Grupo";
        $this->view->render('grupos/detalle');//carga la info 
    }

    //actualizarcurso
    function actualizarGrupo(){
        //var_dump($_POST);
        $mensajePersonalizado = new Misc();

        if ($this->model->actualizarGrupo($_POST)){

            $datos = new classGrupos();            

            foreach ($_POST as $key => $value) {
                # code...
                $datos->$key= $value;
            }

            $mensajeResultado = $mensajePersonalizado->mensajeActualizarExitoso;
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeActualizarError; 
        }
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Grupo";
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }    

    //eliminarcurso
    function eliminarGrupo( $param = null ){   
        $id = $param[0];
        $mensajePersonalizado = new Misc();

        if ($this->model->eliminarGrupo($id)){
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarExitoso; 
        }else{
            $mensajeResultado = $mensajePersonalizado->mensajeEliminarError;
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        $this->render();
    }

}