
<?php 
require 'view/header.php'; 
require 'view/menu.php'; 
?> 
<div class="container-fluid " id="contendorprincipal"> 
<?php echo $this->mensajeResultado ?> 
  <div class="tab-content"> 
    <div class="row"> 
 
      <div class="col-md-4"></div> 
 
      <div class="col-md-4 colorFondo mt-4 rounded">       
        <h1 class="m-4 text-center">Crear cuenta</h1> 
 
        <form action="<?php echo constant('URL'); ?>usuarios/registrarUsuario" method="POST" class="m-4"> 
 
          <div class="form-outline mb-4 "> 
            <label class="" for=""> Nombre</label> 
            <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese el nombre de usuario" required/> 
          </div> 
          
          <div class="form-outline mb-4 "> 
            <label class="" for=""> Correo electrónico</label> 
            <input type="email" name="email" id="email" class="form-control" placeholder="correo@ejemplo.com" required/> 
          </div> 
 
          <div class="form-outline mb-4"> 
            <label class="" for=""> Contraseña</label> 
            <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese una contraseña" required/> 
          </div> 
 
          <div class="form-outline"> 
            <label class="" for="">Confirmar contraseña</label> 
            <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Digite nuevamente la contraseña" required/> 
          </div> 
           
          <p class="text-center">¿Ya tienes cuenta? <a href="<?php echo constant('URL'); ?>usuarios/verLogin" class="">Iniciar sesión</a></p> 
          <div class="text-center"> 
            <button type="submit" class="btn btn-primary btn-block mb-1">Registrarme</button> 
          </div> 
        </form> 
      </div> 
    </div> 
  </div> 
  <div class="col-md-4"></div> 
</div> 
 
<?php 
require 'view/footer.php'; 
?>