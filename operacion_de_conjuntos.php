<!DOCTYPE html>
<!-- Se procede a importar el backend -->
<?php include('backend.php') ?>
<?php include("definiciones.php"); ?>
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
                        <h1><?= $titulo ?></h1>
                        <p align="justify"> <?= $parrafo ?></b>
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="img/<?= $imagen ?>" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <?= $nota ?>
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
                            <h6 class="heading">Calculadora de <?= $titulo ?></h6>
                        </header>
                        <hr>
                        <form class="row g-3" method="POST" action="" id="conjuntos">
                            <div class="mb-3">
                                <label for="validationDefaultUsername" class="form-label">Conjunto 1</label>
                                <input type="text" name="conjunto1" class="form-control" id="conjunto1" rows="5" required></input>
                            </div>
                            <div class="mb-3">
                                <label for="validationDefaultUsername" class="form-label">Conjunto 2</label>
                                <input type="text" name="conjunto2" class="form-control" id="conjunto2" rows="5" required></input>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" id="enviar">Calcular</button>
                            </div>
                        </form>
                        <br>
                        <div id="resultado">

                        </div>
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