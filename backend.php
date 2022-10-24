<?php

if (isset($_POST['operacion'])) {

    $operacion = strtoupper($operacion = $_POST['operacion']);

    $prueba = $_POST['conjunto1'];
    $prueba2 = $_POST['conjunto2'];
    $test = str_replace([' ', '{', '}'], "", $prueba);
    $test = explode(",", $test);
    $test2 = str_replace([' ', '{', '}'], "", $prueba2);
    $test2 = explode(",", $test2);

    $interseccion = array_intersect($test, $test2);

    print_r($test);
    echo "<br>";
    print_r($test2);
    echo "<br>";
    print_r($interseccion);

    $interseccion1 = array();
}
