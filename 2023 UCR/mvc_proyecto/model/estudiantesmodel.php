<?php
//el modelo interactua con nuestra BD 
include_once 'class/estudiantes.php';//incluyo el archivo 

//va a heredar del Model que está dentro de libs 
class EstudiantesModel extends Model{

    public function __construct(){//inicializo contructor 
        parent::__construct();//inicializo lo que el tiene heredaro, del archivo model
    }

    //podemos usar nombres genéricos para saber lo que estamos llamando 
    public function getEstudiantes(){
        $items = []; 

        try {
            //code...
            $stringSQL = "SELECT * FROM `estudiante` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){
                $item = new classEstudiantes();

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

    public function insertarEstudiante($datos){
        # INSERT INTO estudiante(id, cedula, correoelectronico, telefono, telefonocelular, fechanacimiento, sexo, direccion, nombre, apellidopaterno, apellidomaterno, nacionalidad, idCarreras, usuario) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')
        try {
            //code...
            $datos['id'] = "0";
            $datos['usuario'] = "Benavides";
            $stringSQL = 'INSERT INTO estudiante(id, cedula, correoelectronico, telefono, telefonocelular, 
            fechanacimiento, sexo, direccion, direccion, nombre, apellidopaterno, apellidomaterno, 
            nacionalidad, idCarreras, usuario) VALUES ( :id, :cedula, :correoelectronico, :telefono, 
            :telefonocelular, :fechanacimiento, :sexo, :direccion, :nombre, :apellidopaterno, :apellidomaterno,
             :nacionalidad, :idCarreras, :usuario);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            //var_dump($th);
            return false;
        }
    }


    /////////////////////////////////////tercer video 
    public function verEstudiantes($id){
        //var_dump($_SESSION);
        try {
            $item = new classEstudiantes();//trae todos los atributos de curso
            //code...
            $stringSQL = "Select * FROM `estudiante` where id=:id;";
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
      public function actualizarEstudiante($datos){
        //            var_dump($datos);
        try {
            //code...
            #UPDATE estudiante SET cedula='[value-2]',correoelectronico='[value-3]',telefono='[value-4]',telefonocelular='[value-5]',fechanacimiento='[value-6]',sexo='[value-7]',direccion='[value-8]',nombre='[value-9]',apellidopaterno='[value-10]',apellidomaterno='[value-11]',nacionalidad='[value-12]',idCarreras='[value-13]',usuario='[value-14]' WHERE  id='[value-1]'                    
            $datos['usuario'] = "Prof Mario";
            $stringSQL = 'UPDATE estudiante SET cedula=:cedula,correoelectronico=:correoelectronico,
                telefono=:telefono,telefonocelular=telefonocelular,fechanacimiento=:fechanacimiento,
                sexo=:sexo,direccion=:direccion,nombre=:nombre,apellidopaterno=:apellidopaterno,
                apellidomaterno=:apellidomaterno,nacionalidad=:nacionalidad,idCarreras=:idCarreras,
                usuario=:usuario WHERE  id=:id;';
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
    public function eliminarEstudiante($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM estudiante WHERE id =:id;";
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