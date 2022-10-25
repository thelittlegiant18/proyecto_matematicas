<?php

if (isset($_POST['conjunto1']) && isset($_POST['conjunto2'])) {

    $prueba = $_POST['conjunto1'];
    $prueba2 = $_POST['conjunto2'];
    $test = str_replace([' ', '{', '}'], "", $prueba);
    $test = explode(",", $test);
    $test2 = str_replace([' ', '{', '}'], "", $prueba2);
    $test2 = explode(",", $test2);

    $interseccion = array_intersect($test, $test2);

    // print_r($test);
    // echo "<br>";
    // print_r($test2);
    // echo "<br>";
    // print_r($interseccion);

    echo "Conjunto 1 = {", $prueba, "}";
    echo "<br>";
    echo "Conjunto 2 = {", $prueba2, "}";
    echo "<br>";
    echo "Conjunto 1 <b>∩</b> Conjunto 2 = ";
    $arrayInterseccion = implode(', ', $interseccion);
    echo "{", $arrayInterseccion, "}";
}
