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
    <div class="container mt-2">
        <br>
        <div class="card shadow">
            <div class="card-body table-responsive">

                <!-- Se procede a crear el formulario para filtrar por medio de la expresión regular con el formato aaaa-mm-dd -->
                <div class="mb-3">
                    <label for="validationDefaultUsername" class="form-label">Ejecute aquí</label>
                </div>
                <br>
                <?php echo "A ∪ B  = { "; print_r($arrayUnionTest); echo " }"; ?>
                <br>
                <?php echo "Conjunto A = { "; print_r($arrayString1); echo " }"; ?>
                <br>
                <?php echo "Conjunto B = { "; print_r($arrayString2); echo " }"; ?>
                <br>
                <?php echo "Conjunto C = { "; print_r($arrayString3); echo " }"; ?>
                <br>
                <?php echo "A ∩ B  = { "; print_r($arrayInterseccion); echo " }"; ?>
                <br>
                <?php echo "A - B  = { "; print_r($arrayDiferencia); echo " }"; ?>
                <br>
                <?php echo "A ∪ B  = { "; print_r($arrayUnion); echo " }"; ?>
                <br>
                <?php echo "A ∆ B  = { "; print_r($arrayDiferenciaSimetrica); echo " }"; ?>
                <br>  
            </div>
        </div>
    </div>
    <!-- Fin Contenedor -->

    <!-- Se procede a llamar al Scrpt de Bootsrap v5.2 -->
    <script src="js/bootstrap.bundle.js"></script>
    <!-- Fin Script -->
</body>

</html>