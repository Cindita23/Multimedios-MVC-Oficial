<?php
//el modelo interactua con nuestra BD 
include_once 'class/profesores.php';//incluyo el archivo 
include_once 'class/grupos.php'; 

//va a heredar del Model que está dentro de libs 
class ProfesoresModel extends Model{

    public function __construct(){//inicializo contructor 
        parent::__construct();//inicializo lo que el tiene heredaro, del archivo model
    }

    //podemos usar nombres genéricos para saber lo que estamos llamando 
    public function getProfesores(){
        $items = []; 

        try {
            //code...
            $stringSQL = "SELECT * FROM profesor order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){
                $item = new classProfesores();

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

    public function getGruposNombre(){
        $items = []; 

        try {
            //code...
            $stringSQL = "SELECT * FROM `grupo`;";
            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){
                $item = new classGrupos();

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

    public function insertarProfesor($datos){
        # INSERT INTO profesor(id, cedula, correoelectronico, telefono, telefonocelular, 
        #fechanacimiento, sexo, direccion, nombre, apellidopaterno, apellidomaterno, 
        #nacionalidad, usuario, idcarreras) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')
        try {
            //code...
            $datos['id'] = "0";
            $datos['usuario'] = "Benavides";
            $stringSQL = 'INSERT INTO profesor(id, cedula, correoelectronico, telefono, telefonocelular, 
            fechanacimiento, sexo, direccion, nombre, apellidopaterno, apellidomaterno, 
            nacionalidad, usuario, idCarreras) VALUES ( :id, :cedula, :correoelectronico, :telefono, 
            :telefonocelular, :fechanacimiento, :sexo, :direccion, :nombre, :apellidopaterno, :apellidomaterno,
             :nacionalidad, :usuario, :idcarreras);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
            //throw $th;
            //var_dump($th);
            return false;
        }
    }

    public function verProfesores($id){
        //var_dump($id);
        try {
            $item = new classProfesores();
            //trae todos los atributos de curso
            //code...
            $stringSQL = "Select * FROM `profesor` where id=:id;";
            $query = $this->db->connect()->prepare($stringSQL);//se prepara el sql con lo que viene, con el atributo id
            $query->execute(['id'=>$id]);//ejecutamos un solo dato, id

            while ( $row = $query->fetch()){//obtiene la fila
                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                   // $_SESSION['autenticado'] = true;
                }
            }
            //var_dump($item);
            return $item;
            
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }           
    }
    
      //actualizarcurso
      public function actualizarProfesor($datos){
        //var_dump($datos);
        try {
            //code...
            #UPDATE profesor SET cedula='[value-2]',correoelectronico='[value-3]',telefono='[value-4]',
            #telefonocelular='[value-5]',fechanacimiento='[value-6]',sexo='[value-7]',direccion='[value-8]',
            #nombre='[value-9]',apellidopaterno='[value-10]',apellidomaterno='[value-11]',
            #nacionalidad='[value-12]',usuario='[value-13]',idcarreras='[value-14]' WHERE id='[value-1]'               
            $datos['usuario'] = "Benavides";
            $stringSQL = 'UPDATE profesor SET cedula=:cedula,correoelectronico=:correoelectronico,
                telefono=:telefono,telefonocelular=:telefonocelular,fechanacimiento=:fechanacimiento,
                sexo=:sexo,direccion=:direccion,nombre=:nombre,apellidopaterno=:apellidopaterno,
                apellidomaterno=:apellidomaterno,nacionalidad=:nacionalidad,usuario=:usuario,idcarreras=:idcarreras
                 WHERE  id=:id;';
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
    public function eliminarProfesor($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM profesor WHERE id =:id;";
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