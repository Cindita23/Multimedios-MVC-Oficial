<?php

    //si no encunetra el archivo se cae todo, si o si tiene que estar el archivo para que funcione 
    include 'menu.php';
    include 'footer.php';
    require 'plantilla.php';
    //require 'menu.php';
    //si no lo encuentra que no se caiga, que siga su ejecución 
    //require 

    // También existen estas otras 
    //include_once 
    // require_once

    $plantilla = new plantilla();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- php es más ligero que c#
        cuando son variables estaticas la idea es encriptarlos -->
        <?php
        echo $plantilla -> getMenu();
        ?>
    </header>
    <main>
        <?php
        $nombrepagina = 'Clase PHP';
        $titulo = "<h1> " . $nombrepagina . " </h1>";
        // $titulo2 = "<h1> $nombrepagina </h1>";
        echo $titulo;
        // echo $titulo2;
        echo 'Vamos a las soda';
        echo '<div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Column 1</th>
                        <th scope="col">Column 2</th>
                        <th scope="col">Column 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>';
        ?>


    </main>
    <footer class="bg-dark text-white container-fluid">
        <?php
           echo $plantilla -> getFooter();
        ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>