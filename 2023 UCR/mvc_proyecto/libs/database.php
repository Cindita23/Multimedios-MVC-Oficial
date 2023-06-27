<!-- Las librerías son las que  nos permiten interactuar 
son clases que estemos usando desde otro lugar-->

<?php
//para conectarnos a la base de datos a través del método "PDO"
// que es directamente para podernos conectar a mysql. 

class Database
{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        //Tenemos lo de la declaración de atributos, pero ahora lo utilizamos mediante 
        //  la variable global "constant", eso lo agarra del archivo de config.
        //Las CONSTANTES son unos arreglos que nosotros podemos utilizar a
        //  través de cualquier lugar que nosotros nos encontremos. 
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function connect()
    {
        try {
            //code...
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;

            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $option);

            return $pdo;
        } catch (PDOException $th) {
            //throw $th;
            echo "Fail connect: " . $th->getMessage();
        }
    }
}

?>
