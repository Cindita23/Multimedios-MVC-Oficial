<?php
//el modelo interactua con nuestra BD 
include_once 'class/usuarios.php';//incluyo el archivo 

//va a heredar del Model que está dentro de libs 
class UsuariosModel extends Model{

    public function __construct(){//inicializo contructor 
        parent::__construct();//inicializo lo que el tiene heredaro, del archivo model
    }

    //podemos usar nombres genéricos para saber lo que estamos llamando 
    public function getUsuarios(){
        $items = []; //los arreglos vacíos me sirven para manejar estructuras dinámicasindiferentemente en el lenguaje de programación que esté 

        try {
            //code...
            //estamos llamando directamente la sentencia sql 
            $stringSQL = "SELECT * FROM `user` order by id DESC;";
            //query tiene acceso a todos los elementos que tiene el modelo 
            //el método connect se usa para poder leer los datos que están en la BD 
            $query = $this->db->connect()->query($stringSQL);

            //recorro los datos, el fetch me trae todo lo que está adentro 
            while ( $row = $query->fetch()){//obtiene todas las filas
                $item = new classUsuarios();//para traer los atributos 

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

    public function insertarUsuario($datos){
        # INSERT INTO user(id, name, email, password) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
        try {
            //code... 
            $datos['id'] = "0";  
            $pass = md5($datos['password']);     
            $datos['password'] = $pass;       

            $stringSQL = "INSERT INTO user(id, name, email, password) VALUES ( :id, :name, :email, :password);";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            //var_dump($th);
            return false;
        }
    }

    public function verUsuarios($id){
        //var_dump($_SESSION);
        try {
            $item = new classUsuarios();//trae todos los atributos de curso
            //code...
            $stringSQL = "Select * FROM `user` where id=:id;";
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
      public function actualizarUsuario($datos){
        //            var_dump($datos);
        try {
            //code...{}
            $pass = md5($datos['password']);     
            $datos['password'] = $pass; 
            $stringSQL = 'UPDATE user SET name=:name,email=:email,password=:password WHERE id=:id ;';
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
    public function eliminarUsuario($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM user WHERE id =:id;";
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