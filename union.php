<!DOCTYPE html>
<!-- Se procede a importar el backend -->
<?php include('backend.php') ?>
<html>

<head lang="es">
    <meta charset="UTF-8">
    <title>Proyecto Matematicas Discretas</title>
    <!-- Se procede a llamar la librería de Boostrap v5.2 para estilizar el aplicativo -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Fin Boostrap -->
</head>

<body>

    <?php include('layout/menu.php') ?>

    <!-- Se procede a crear un contenedor donde se tendrá el contenido solicitado -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-body">
                        <h1>Unión de Conjuntos</h1>
                        <p align="justify">Dado dos conjuntos M y N, se define la unión entre estos dos conjuntos como el conjunto formado por los elementos
                            que pertenecen al conjunto M o pertenecen al conjunto N, simbolicamente:
                            <b>MUN = {X/X ∈ M v X ∈ N}</b>.
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="img/union_de_conjuntos.png" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <p><b>Nota:</b> Casos Especiales</p>
                                        <ol class="list-group list-group-numbered">
                                            <li class="list-group-item">Si MCN -> M∪N = N</li>
                                            <li class="list-group-item">M∪M = M</li>
                                            <li class="list-group-item">M∪∅ = M</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <header class="single-post-header clearfix">
                            <h6 class="heading">Calculadora de Unión de Conjuntos</h6>
                        </header>
                        <hr>
                        <form class="row g-3" method="POST" action="" id="conjuntos">
                            <div class="mb-3">
                                <textarea name="operacion" class="form-control" id="operacion" rows="5"></textarea>
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
    <script src="test.js"></script>
    <!-- Fin Script -->
</body>

</html>