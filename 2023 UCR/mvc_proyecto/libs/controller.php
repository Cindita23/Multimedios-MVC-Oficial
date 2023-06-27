<?php
//lo que hace es heredar todo lo que tenga Session
class Controller extends Session{
    function __construct(){
        parent::__construct();//inicializa de lo que heredó
        $this->view = new View();//luego le dice que a ese elemento lo
        //use como una nueva vista para que nosotros podamos trabajar.
    }

    //LoadModel:recibe el modelo
    function loadModel($model){
        $url = 'model/'.$model.'model.php'; //esto es parte de la programación dinámica
        //yo no voy a saber que url me va a llegar , ni cual voy a ocupar, pero a trevés
        //de esa línea, puedo concatenar todos los elementos 

        if (file_exists($url)){
            require $url;//si el archivo existe, entonces abre el archivo
            //no necesito saber cual es el archivo , sino simplemente se autocontruye y puedo generar
            
            //es como si tuviera: Main+Model=MainModel
            $modelName = $model.'Model';

            $this->model = new $modelName();
        }
    }

}


?>