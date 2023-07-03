<?php
//el modelo interactua con nuestra BD 
include_once 'class/cursos.php';//incluyo el archivo 

//va a heredar del Model que está dentro de libs 
class CursosModel extends Model{

    public function __construct(){//inicializo contructor 
        parent::__construct();//inicializo lo que el tiene heredaro, del archivo model
    }
    //podemos usar nombres genéricos para saber lo que estamos llamando 
    public function getCursos(){
        $items = []; //los arreglos vacíos me sirven para manejar estructuras dinámicasindiferentemente en el lenguaje de programación que esté 

        try {
            //code...
            //estamos llamando directamente la sentencia sql 
            $stringSQL = "SELECT * FROM `curso` order by id DESC;";
            //query tiene acceso a todos los elementos que tiene el modelo 
            //el método connect se usa para poder leer los datos que están en la BD 
            $query = $this->db->connect()->query($stringSQL);

            //recorro los datos, el fetch me trae todo lo que está adentro 
            while ( $row = $query->fetch()){//obtiene todas las filas
                $item = new classCursos();//para traer los atributos 

                //como yo no se que viene de la BD, no me voy a poner a escribir variable por variable
                //$key (guarda tiempo, nombre...)
                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);//carga todo lo que tiene item al arreglo vacío, lo va llenando
            }
            return $items;
        } catch (PDOException $th) {
            //throw $th; 
            return [];
        }
    }

    public function insertarCurso($datos){
//# INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
        try {
            //code..
            
            $datos['id'] = "0";//---de todas formas el id se agrega en BD, este es solo para que no se caiga--
            $username = $_SESSION['name'];
            $datos['usuario'] =  $username ;//-ESTO AHY QUE CONECTARLO CON EL LOGIN DESPUÉS-----
            $stringSQL = 'INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES ( :id, :nombre, :descripcion, :tiempo, :usuario);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            //var_dump($th);
            return false;
        }
    }

    public function verCursos($id){
        //var_dump($_SESSION);
        try {
            $item = new classCursos();//trae todos los atributos de curso
            //code...
            $stringSQL = "Select * FROM `curso` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);//se prepara el sql con lo que viene, con el atributo id
            $query->execute(['id'=>$id]);//ejecutamos un solo dato, id

            while ( $row = $query->fetch()){//obtiene la fila
                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                   // $_SESSION['autenticado'] = true;
                }
            }
            return $item;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }           
    }
    
      //actualizarcurso
      public function actualizarcurso($datos){
        //            var_dump($datos);
        try {
            //code... 
            //#UPDATE curso SET nombre='[value-2]',descripcion='[value-3]',tiempo='[value-4]',usuario='[value-5]' WHERE id='[value-1]'                     
            $username = $_SESSION['name'];
            $datos['usuario'] =  $username ;
            $stringSQL = 'UPDATE curso SET nombre=:nombre,descripcion=:descripcion,tiempo=:tiempo,usuario=:usuario WHERE id=:id ;';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }
    }   

    //eliminarcurso
    public function eliminarcurso($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM curso WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);
            
            return true;
        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }           
    }

}

?>