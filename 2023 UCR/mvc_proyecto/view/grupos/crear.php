<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container" id="contendorprincipal">    
    <h1 class="text-center"><?php echo $this->mensaje;?></h1>
    <form class="form-control colorFondo p-4" action="<?php echo constant('URL'); ?>grupos/insertargrupo" method="POST">
        <?php require 'form.php'; ?>
    </form>
</div>
<?php
    require 'view/footer.php';
?>