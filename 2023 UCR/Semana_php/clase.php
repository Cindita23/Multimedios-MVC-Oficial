<?php 

//ESTRICTURA DE UNA CLASE
//constructor 
//atributos variables 
//set, get que son las funciones 
//una clase tiene: metodos void 

//CLASE PERSONA
class persona {
    //publico puede acceder desde cualquier lugar, acceso global 
    //cuando es privado solo lo ocupo consumir desde aquí, como el string de conexion 
    public $nombre; 
    public $cedula;
    public $apellido;
    public $correo; 

    //constructor 
    public function __construct($nombre, $cedula, $apellido, $correo){
        $this->$nombre = $nombre; 
        $this->$cedula = $cedula;
        $this->$apellido = $apellido;
        $this->$correo = $correo; 
    }

    public function setNombre($nombre){
        $this->nombre = $nombre; 
    }

    public function getNombre(){
        return $this->nombre; 
    }
  
    public function setCedula($cedula){
        $this->cedula = $cedula; 
    }

    public function getCedula(){
        return $this->cedula; 
    }

    public function setApellido($apellido){
        $this->apellido = $apellido; 
    }

    public function getApellido(){
        return $this->apellido; 
    }

    public function setCorreo($correo){
        $this->correo = $correo; 
    }

    public function getCorreo(){
        return $this->correo; 
    }
}

$persona = new persona('','','',''); 

$persona->setNombre('Cin');
echo $persona->getNombre();//para imprimir el nombre


?>

