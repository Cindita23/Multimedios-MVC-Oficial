<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container" id="contendorprincipal">
    <div class="mt-4"><?php echo $this->mensajeResultado; ?></div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 colorFondo mt-5 rounded">
            <h1 class="text-center mt-4 mb-3">Inicio de Sesión</h1>
            <form action="<?php echo constant('URL'); ?>usuarios/autenticacion" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input required type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contraseña</label>
                    <input required type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese su contraseña">
                </div>
                <div class="mb-4 text-center">
                    <button type="submit" class="btn btn-primary">Ingresar</button>
                </div>

            </form>
            <p class="my-2"> No tienes cuenta?
                <a href="<?php echo constant('URL'); ?>usuarios/verRegistroUsuario" class="">Registrarme</a>
            </p>
        </div>
    </div>


</div>
<?php
require 'view/footer.php';
?>