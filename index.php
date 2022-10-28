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
        <div class="card shadow">
            <div class="card-body">
                <h5 align="justify">El álgebra de conjuntos es el área de la matemática que estudia a los conjuntos como objetos
                    matemáticos para los que se define un conjunto de operaciones que cumplen determinadas leyes.
                    Las operaciones del álgebra de conjuntos son: unión, intersección, complemento, diferencia y
                    diferencia simétrica.</h5>
                <br>
                <div class="card-body text-center">
                    <div class="row text-center">
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="img/union_de_conjuntos.svg" class="img-fluid">
                                <div class="card-body">
                                    <a href="<?php echo $SERVERURL ?>operacion_de_conjuntos?union" class="btn btn-primary">Union</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="img/interseccion_de_conjuntos.svg" class="img-fluid">
                                <div class="card-body">
                                    <a href="<?php echo $SERVERURL ?>operacion_de_conjuntos?interseccion" class="btn btn-primary">Intersección</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="img/diferencia_de_conjuntos.svg" class="img-fluid">
                                <div class="card-body">
                                    <a href="<?php echo $SERVERURL ?>operacion_de_conjuntos?diferencia" class="btn btn-primary">Diferencia</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="img/diferencia_simetrica_de_conjuntos.svg" class="img-fluid">
                                <div class="card-body">
                                    <a href="<?php echo $SERVERURL ?>operacion_de_conjuntos?diferencia_simetrica" class="btn btn-primary">Diferencia Simétrica</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="img/complemento_de_conjuntos.svg" class="img-fluid">
                                <div class="card-body">
                                    <a href="<?php echo $SERVERURL ?>operacion_de_conjuntos?complemento" class="btn btn-primary">Complemento</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="img/conjunto_universal.svg" class="img-fluid">
                                <div class="card-body">
                                    <a href="<?php echo $SERVERURL ?>operacion_de_conjuntos?universal" class="btn btn-primary">Universal</a>
                                </div>
                            </div>
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