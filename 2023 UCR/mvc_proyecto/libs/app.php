<?php 
// permite intercomunicar todo, todo se fusiona 
//es el core o todo lo que sirve para contruir nuestro proyecto. 
class App{
    function __construct(){

        $url = isset($_GET['url']) ? $_GET['url'] : null; //if (vacío) verdadero usa getURL, sino es null
            
        $url = rtrim($url, '/'); 

        $url = explode('/', $url);

        if(empty($url[0])){
            $archivoController = 'controller/main.php';
            require_once $archivoController;
            $controller = new Main ();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }

        $archivoController = 'controller/'.$url[0].'.php';
        
        if(file_exists($archivoController)){
            require_once $archivoController; 

            $controller = new $url[0]();
            $controller->loadModel($url[0]);

            $nparam = sizeof($url);//obtengo cuantos elementos tiene la url 

            // viene con funcion
            if($nparam > 1){
                // viene con funcion y parámetros
                if($nparam > 2){
                //el arreglo vacio es para algo que yo no tengo ni idea
                $param = [];
                for ($i = 2; $i < $nparam; $i++){
                    array_push($param, $url[$i]);
                }

                $controller->{$url[1]}($param); 

                }else{
                    $controller->{$url[1]}();
                }

            }//sin funcion 
            else{
                $controller->render();//todas las carpetas deberían tener un index, ahi me llevaría 
            }
        }
        else{
            require_once 'controller/error.php'; 
            $controller = new Errores();
        }

       
    }
}
?>


