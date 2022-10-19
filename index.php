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
                <form class="row g-3" method="POST" action="" id="conjuntos">
                    <div class="mb-3">
                        <label class="form-label">Escriba Aquí</label>
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
    <script src="js/jquery-3.6.0.js"></script>
    <script src="test.js"></script>
    <!-- Fin Script -->
</body>

</html>