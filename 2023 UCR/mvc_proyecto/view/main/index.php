<?php
require 'view/header.php';
require 'view/menu.php';
?>

<body>
    <div class="container-fluid imgFondoMain" id="contendorprincipal ">
        <div class="container-fluid m-0 p-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="public/img/Inicio/Carrusel1.jpeg" class="w-100 d-block" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="fw-bold">Universidad DC</h1>
                            <p>Ofrecemos distintas carreras que se ajustan a tus sueños.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/Inicio/Carrusel2.jpeg" class="w-100 d-block" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Profesores</h3>
                            <p>Contamos con más de 100 profesores capacitados para enseñarte de una manera innovadora.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/Inicio/Carrusel3.jpeg" class="w-100 d-block" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Estudiantes</h3>
                            <p>Nuestros estudiantes, cuentan con espacios abiertos donde pueden relajarse y estudiar
                                tranquilamente</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="container-fluid">
                <div class="text-center mt-3">
                    <hr class="text-light">
                    <h2 class="text-center mt-3">INSTITUCIÓN EDUCATIVA</h2>
                    <hr class="text-light">
                </div>
                <div id="" class="py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 mb-4 ">
                                <div class="card h-100">
                                    <img src="public/img/Inicio/Biblioteca.jpg" class="card-img-top" alt="Imagen de la biblioteca">
                                    <div class="card-body">
                                        <h3 class="card-title fw-bold mb-3 text-center">Bibliotecas</h3>
                                        <p class="card-text text-center">
                                            ¡Bienvenido al innovador mundo del conocimiento en el Instituto Cyber! Aquí en nuestro
                                            instituto,
                                            no solo se basa en la tecnología y la informática, sino que también valoramos la riqueza y el
                                            poder de la palabra impresa. Es por eso que nos enorgullece presentarte nuestras modernas
                                            bibliotecas de estudio.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="public/img/Inicio/Espacio.jpg" class="card-img-top" alt="Imagen del espacio estudio">
                                    <div class="card-body">
                                        <h3 class="card-title fw-bold mb-3 text-center">Espacios de estudio</h3>
                                        <p class="card-text text-center">En nuestro compromiso por brindar un entorno propicio para el
                                            aprendizaje, hemos
                                            diseñado espacios innovadores que te inspirarán a alcanzar tus metas académicas. Nuestras modernas
                                            áreas
                                            de estudio están diseñadas para fomentar la concentración, la colaboración y el crecimiento
                                            intelectual.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    <img src="public/img/Inicio/informatica.png" class="card-img-top" alt="Imagen de laboratorios">
                                    <div class="card-body">
                                        <h3 class="card-title fw-bold mb-3 text-center">Laboratorios</h3>
                                        <p class="card-text text-center">En el Instituto Cyber B, contamos con laboratorios de informática
                                            completamente equipados.
                                            Nuestros laboratorios ofrecen un entorno propicio para el aprendizaje y la práctica de las
                                            habilidades y
                                            conocimientos relacionados con la informática. Con equipos modernos y actualizados, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
require 'view/footer.php';
?>