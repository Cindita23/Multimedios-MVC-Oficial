<?php 

class plantilla {
    //publico puede acceder desde cualquier lugar, acceso global 
    //cuando es privado solo lo ocupo consumir desde aquí, como el string de conexion 
    public $menu; 
    public $footer;

    //constructor 
    public function __construct(){
        $menu = ' <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-expand-xl navbar-expand-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarTooglerDemo01" aria-controls="navbarTooglerDemo01" aria-expanded="false"
        aria-label="Toogle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarTooglerDemo01">
        <ul class="navbar-nav">
            <li class="nav-item ms-4">
                <a class="nav-link fw-bold aumentarLetra" href="index.php">Inicio</a>
            </li>
    
            <li class="nav-item ms-4">
                <a class="nav-link fw-bold aumentarLetra" href="https://paginas-web-cr.com/ApiPHP/">API</a>
            </li>
    
            <li class="nav-item dropdown ms-4">
            <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Cursos</a>
            <div class="dropdown-menu bg-dark">
                <a class="dropdown-item text-white" href="crearCurso.html">Agregar Curso</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-white" href="listarCurso.html">Lista Cursos</a>
            </div>
            </li>
    
            <li class="nav-item dropdown ms-4">
            <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Grupos</a>
            <div class="dropdown-menu bg-dark">
                <a class="dropdown-item text-white" href="crearGrupo.html">Agregar Grupo</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-white" href="listarGrupo.html">Lista Grupos</a>
            </div>
            </li>
    
            <li class="nav-item dropdown ms-4">
            <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Estudiantes</a>
            <div class="dropdown-menu bg-dark">
                <a class="dropdown-item text-white" href="crearEstudiante.html">Agregar Estudiante</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-white" href="listarEstudiantes.html">Lista Estudiantes</a>
            </div>
            </li>
    
            <li class="nav-item dropdown ms-4">
            <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">Profesores</a>
            <div class="dropdown-menu bg-dark">
                <a class="dropdown-item text-white" href="crearProfesor.html">Agregar Profesor</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-white" href="listarProfesores.html">Lista Profesores</a>
            </div>
            </li>
        </ul>
        </div>
        </nav>';
        
        $footer = '
        <div class="pl-5 pr-5 pt-3">
            <div class="row pt-2">
                <ul class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 d-flex list-unstyled justify-content-center mb-5">
                    <li>
                        <a href="index.html">
                            <img src="img/logo.png" width="180px" height="150px" alt="Logo"
                                title="Ir a Página Principal">
                        </a>
                    </li>
                </ul>
        
                <ul class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5 list-unstyled text-center mb-5">
                    <li class="fw-bold text-uppercase pb-3">¿Quienes somos?</li>
                    <li>
                        <p>Universidad Benavides Zúñiga, es una institución reconocida a nivel mundial. 
                            En los últimos 10 años, hemos logrado graduar a miles de estudiantes tanto 
                            nacionales como extranjeros. Visita nuestras carreras y matricula ya en la que
                            mejor se adapte a tus sueños.
                        </p>
                    </li>
                    <li><a href="nosotros.html" class="text-reset" target="_blanck">Sobre nosotros</a></li>
                </ul>
        
                <ul class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 list-unstyled text-center">
                    <li class="fw-bold text-uppercase">Redes sociales</li><br>
                    <li class="d-flex justify-content-center">
                        <a href="https://www.facebook.com/cindy.benavideszuniga.5/" class="text-reset" target="_blanck">
                            <img src="iconos/facebook.png" alt="icono de facebook" title="Visitanos en facebook">
                        </a>
                        <a href="https://www.instagram.com/cindy.bz/?hl=es" class="text-reset ms-3" target="_blanck">
                            <img src="iconos/Instagram.png" alt="icono de instagram" title="Visitanos en instagram">
                        </a>
                        <a href="https://www.youtube.com/channel/UCsx2nIDzB09n4BUHGLqrsdA" class="text-reset ms-3"
                            target="_blanck">
                            <img src="iconos/YouTube.png" alt="icono de YouTube" title="Visitanos en YouTube">
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=50686582723&text=Hola! Nos gustaría saber más sobre "
                            class="text-reset ms-3" target="_blanck">
                            <img src="iconos/whatsapp.png" alt="icono de whatsapp" title="Envianos un mensaje">
                        </a>
                        <a href="https://www.linkedin.com/in/cindy-benavides-z%C3%BA%C3%B1iga-476714274/" class="text-reset ms-3" target="_blanck">
                            <img src="iconos/linkedin.png" alt="icono de Linkedin" title="Visitanos en Linkedin">
                        </a>
                    </li>
                </ul>
                <div class="col-12 fw-bold text-center mt-3 p-4">
                    Universidad Benavides Zúñiga. Todos los derechos reservados&copy;2023
                </div>
            </div>
            </div>
        ';
        $this->menu = $menu; 
        $this->footer = $footer;
    }

    public function setMenu($menu){
        $this->menu = $menu; 
    }

    public function getMenu(){
        return $this->menu; 
    }
  
    public function setFooter($footer){
        $this->footer = $footer; 
    }

    public function getFooter(){
        return $this->footer; 
    }
    
}

?>

