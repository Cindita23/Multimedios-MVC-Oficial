<!-- sesion en mayuscula porque si se usa minuscula es una palabra reservada -->
<!-- para que verifique si el usuario esta o no conectado 
es para cuando hago el login y este ahí, nos devuelva una respuesta satisfactoria
 que nos permita iniciar la sesión. La sesión es un espacio temporal
 que se va a crear en el código para indicarle al usuario que si está cumpliendo
 con ciertas reglas, a través de la session podemos decirle al usuario usted está 
 o no está autenticado. 
-->

<?php
// require_once "usuariosmodel.php";
class Session
{
    function __construct()
    {
    }
    function connectionSession()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        // if (isset($_SESSION['idUser'])) {
        //     $this->view->render('main/index');
        // } else {
        //     $this->view->render('login/index');
        //     //     echo 'Desconectado';

        //     //     echo "<script>
        //     //             alert('Redireccionando, no esta autenticado');
        //     //             window.location='login';
        //     //         </script>";
        // }
    }
    //{"id":"101","name":"s","email":"ss@hsb","password":"1c592e3481c4df3b64a4dd38fae38280"},{"id":"100","name":"Mar\u00eda Daniela ","email":"danibch1828@gmail.com","password":"1c592e3481c4df3b64a4dd38fae38280"},
}



?>