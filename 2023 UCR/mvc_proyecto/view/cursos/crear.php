<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container-fluid" id="contendorprincipal">    
    <h1><?php echo $this->mensaje;?></h1>
    <!-- el formulario tiene que apuntar a una accion, los famosos controladores, tenemos que decirle hacia donde va 
a ir, pero no lo sabemos, por eso ponemos la constante, el url para controlar todo -->
    <form class="form-control" action="<?php echo constant('URL'); ?>cursos/insertarcurso" method="POST">
        <?php require 'form.php'; ?>
    </form>
</div>
<?php
    require 'view/footer.php';
?>
