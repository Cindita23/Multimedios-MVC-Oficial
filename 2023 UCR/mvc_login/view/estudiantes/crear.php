<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container" id="contendorprincipal">    
    <h1 class="text-center"><?php echo $this->mensaje;?></h1>
    <form class="form-control colorFondo mb-4 p-4" action="<?php echo constant('URL'); ?>estudiantes/insertarEstudiante" method="POST">
        <?php require 'form.php'; ?>
    </form>
</div>
<?php
    require 'view/footer.php';
?>