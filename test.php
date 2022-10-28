<!DOCTYPE html>
<!-- Se procede a importar el backend -->
<?php include('backend_test.php') ?>
<html>

<head lang="es">
    <meta charset="UTF-8">
    <title>Proyecto Matematicas Discretas</title>
    <!-- Se procede a llamar la librería de Boostrap v5.2 para estilizar el aplicativo -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Fin Boostrap -->
</head>

<body>
    <!-- Se procede a crear una barra de menu para estilizar el Header del aplicativo -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="">Proyecto Matematicas Discretas</a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">A ganar así sea con un 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fin Header -->

    <!-- Se procede a crear un contenedor donde se tendrá el contenido solicitado -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <header class="single-post-header clearfix">
                            <h6 class="heading">Calculadora</h6>
                        </header>
                        <hr>
                        <form class="row g-3" method="POST" action="" id="conjuntos">
                            <input type="hidden" name="operacion" class="form-control" id="operacion"></input>
                            <div class="mb-3">
                                <label for="validationDefaultUsername" class="form-label">Conjunto 1</label>
                                <input type="text" name="conjunto1" class="form-control" id="conjunto1" rows="5"></input>
                            </div>
                            <div class="mb-3">
                                <label for="validationDefaultUsername" class="form-label">Conjunto 2</label>
                                <input type="text" name="conjunto2" class="form-control" id="conjunto2" rows="5"></input>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="button" id="enviar">Calcular</button>
                            </div>
                        </form>
                        <br>
                        <div id="resultado">

                        </div>
                        <?php
                        if (isset($_POST['operacion'])) {

                            echo $test, "<br>";
                            echo '    Interseccion con el conjunto A ∩ B  =    ';
                            $cpp = implode(",", $interseccion1);
                            echo $cpp;
                            echo "\n";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Contenedor -->

    <!-- Se procede a llamar al Scrpt de Bootsrap v5.2 -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <!-- <script src="test.js"></script> -->
    <script src="notas_Musicales/Melodia.js"></script>
    <script src="notas_Musicales/Nota.js"></script>
    <!-- Fin Script -->
</body>


</html>