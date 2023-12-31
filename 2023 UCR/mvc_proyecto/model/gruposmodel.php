<?php

include_once 'class/grupos.php';


class GruposModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getGrupos(){
        $items = [];

        try {
            //code...
            $stringSQL = "SELECT * FROM grupo order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);

            while ( $row = $query->fetch()){//obtiene todas las filas
                $item = new classGrupos();

                foreach ($row as $key => $value) {
                    # code...
                    $item->$key = $value;
                }
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $th) {
            //throw $th;
            return [];
        }
    }

    public function insertarGrupo($datos){        
                try {
                    //code...
                    # INSERT INTO grupo(id, nombre) VALUES ('[value-1]','[value-2]')
                    $datos['id'] = "0";//---de todas formas el id se agrega en BD, este es solo para que no se caiga--
                    $stringSQL = 'INSERT INTO grupo(id, nombre) VALUES ( :id, :nombre);'; 
                    $query = $this->db->connect()->prepare($stringSQL);
                    $query->execute($datos);
                    return true;
        
                } catch (PDOException $th) {
                    //throw $th;
                    //var_dump($th);
                    return false;
                }
            }
        
            public function verGrupos($id){
                //var_dump($_SESSION);
                try {
                    $item = new classGrupos();
                    //code...
                    $stringSQL = "Select * FROM `grupo` where id=:id;";
                    $query = $this->db->connect()->prepare($stringSQL);
                    $query->execute(['id'=>$id]);
        
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
              public function actualizarGrupo($datos){
                //            var_dump($datos);
                try {
                    //code... 
                    //#UPDATE grupo SET nombre='[value-2]' WHERE id='[value-1]'    
                    $stringSQL = 'UPDATE grupo SET nombre=:nombre WHERE id=:id ;';
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
            public function eliminarGrupo($id){        
                try {            
                    //code...
                    $stringSQL = "DELETE FROM grupo WHERE id =:id;";
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