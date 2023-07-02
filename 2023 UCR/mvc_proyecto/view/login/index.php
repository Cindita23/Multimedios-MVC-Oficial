<?php
require 'view/header.php';
require 'view/menu.php';
?>
<div class="container" id="contendorprincipal">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 colorFondo mt-5 rounded">
        <h1 class="text-center mt-4 mb-3">Inicio de Sesión</h1>
            <form class="">
                <div class="mb-3">
                    <label for="" class="form-label">Correo</label>
                    <input required type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Ingrese su correo electrónico">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Contraseña</label>
                    <input required type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingrese su contraseña">
                </div>
                <div class="mb-4 text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>

            </form>
        </div>
    </div>
    if ($datosUsuario && password_verify($password, $datosUsuario["password"])) {
    // Iniciar sesión y guardar el identificador del usuario en la sesión
    $_SESSION['idUser'] = $datosUsuario['id'];
    // Redirigir al usuario a la página principal
    header("Location: index.php");
    exit();
}

</div>

<?php
require 'view/footer.php';
?>