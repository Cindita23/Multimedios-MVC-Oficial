<?php
    class Misc{

        public $mensajeExitosoInsertar = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    El registro se agregó correctamente 
                </div>';
        
        public $mensajeErrorInsertar = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Error al insertar el registro, intente de nuevo
                </div>';

        public $mensajeActualizarExitoso = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    El registro se actualizó correctamente
                </div>'; 

        public $mensajeActualizarError = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Error al actualizar el registro, intente de nuevo 
                </div>';

        public $mensajeEliminarExitoso = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    El registro se eliminó correctamente
                </div>'; 

        public $mensajeEliminarError = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se eliminó el registro
                </div>'; 

        public $mensajeLoginError = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    El correo o la contraseña es incorrecta, ingrese de nuevo los datos 
                </div>';

        public $mensajeContraError = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Las contraseñas ingresadas no coinciden, ingrese de nuevo los datos
                </div>';
    }

?>