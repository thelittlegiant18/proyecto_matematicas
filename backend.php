<?php

$uriData = explode("?", substr($_SERVER["REQUEST_URI"], 1));

$prueba = $uriData[1] ?? "";

if (isset($_POST['conjunto1']) && isset($_POST['conjunto2'])) {

    $operacion = $_POST['operacion'];

    if ($operacion === "interseccion") {

        $conjunto1 = $_POST['conjunto1'];
        $conjunto2 = $_POST['conjunto2'];
        $formateoConjunto1 = str_replace([' ', '{', '}'], "", $conjunto1);
        $test = explode(",", $formateoConjunto1);
        $formateoConjunto2 = str_replace([' ', '{', '}'], "", $conjunto2);
        $test2 = explode(",", $formateoConjunto2);

        $interseccion = array_intersect($test, $test2);

        echo "Conjunto 1 = {", $formateoConjunto1, "}";
        echo "<br>";
        echo "Conjunto 2 = {", $formateoConjunto2, "}";
        echo "<br>";
        echo "Conjunto 1 <b>∩</b> Conjunto 2 = ";
        $arrayInterseccion = implode(', ', $interseccion);
        echo "{", $arrayInterseccion, "}";
    }
}
