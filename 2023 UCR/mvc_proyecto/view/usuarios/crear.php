<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container " id="contendorprincipal">    
    <h1 class="text-center"><?php echo $this->mensaje;?></h1>
    <!-- el formulario tiene que apuntar a una accion, los famosos controladores, tenemos que decirle hacia donde va 
a ir, pero no lo sabemos, por eso ponemos la constante, el url para controlar todo -->
    <form class="form-control colorFondo p-4" action="<?php echo constant('URL'); ?>usuarios/insertarUsuario" method="POST">
        <?php require 'form.php'; ?>
    </form>
</div>
<?php
    require 'view/footer.php';
?>
