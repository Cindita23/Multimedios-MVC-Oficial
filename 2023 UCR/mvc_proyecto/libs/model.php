<?php
//el modelo me permite interactuar contra los datos que estén en la BD 
class Model {
    function __construct(){
        $this->db= new Database();//instancia de la base de datos
    }
}

?>