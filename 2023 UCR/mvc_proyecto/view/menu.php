<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-expand-xl navbar-expand-md">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTooglerDemo01" aria-controls="navbarTooglerDemo01" aria-expanded="false" aria-label="Toogle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTooglerDemo01">
        <ul class="navbar-nav">
            <li class="nav-item ms-4">
                <a class="nav-link fw-bold aumentarLetra" href="<?php echo constant('URL'); ?>">Inicio</a>
            </li>

            <li class="nav-item ms-4">
                <a class="nav-link fw-bold aumentarLetra" href="https://paginas-web-cr.com/ApiPHP/">API</a>
            </li>

            <li class="nav-item dropdown ms-4">
                <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
                <div class="dropdown-menu bg-dark">
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>cursos/crear">Agregar Curso</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>cursos">Lista Cursos</a>
                </div>
            </li>

            <li class="nav-item dropdown ms-4">
                <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grupos</a>
                <div class="dropdown-menu bg-dark">
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>grupos/crear">Agregar Grupo</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>grupos">Lista Grupos</a>
                </div>
            </li>

            <li class="nav-item dropdown ms-4">
                <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
                <div class="dropdown-menu bg-dark">
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>estudiantes/crear">Agregar Estudiante</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>estudiantes">Lista Estudiantes</a>
                </div>
            </li>

            <li class="nav-item dropdown ms-4">
                <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profesores</a>
                <div class="dropdown-menu bg-dark">
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>profesores/crear">Agregar Profesor</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>profesores">Lista Profesores</a>
                </div>
            </li>

            <li class="nav-item dropdown ms-4">
                <a class="nav-link dropdown-toggle fw-bold aumentarLetra" href="#" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios</a>
                <div class="dropdown-menu bg-dark">
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>usuarios/crear">Agregar Usuarios</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-white" href="<?php echo constant('URL'); ?>usuarios">Lista Usuarios</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>