<!-- Se procede a crear una barra de menu para estilizar el Header del aplicativo -->
<head>
    <?php include("config/url.php"); ?>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="./">Melodía de Conjuntos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $SERVERURL ?>operacion_de_conjuntos?union">Union</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $SERVERURL ?>operacion_de_conjuntos?interseccion">Intersección</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $SERVERURL ?>operacion_de_conjuntos?diferencia">Diferencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $SERVERURL ?>operacion_de_conjuntos?diferencia_simetrica">Diferencia Simétrica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $SERVERURL ?>operacion_de_conjuntos?complemento">Complemento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $SERVERURL ?>operacion_de_conjuntos?universal">Universal</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Fin Header -->