<?php

$uriData = explode("?", substr($_SERVER["REQUEST_URI"], 1));

$prueba = $uriData[1] ?? "";

if (isset($_POST['conjunto1']) && isset($_POST['conjunto2'])) {

    $operacion = $_POST['operacion'];

    $conjunto1 = $_POST['conjunto1'];
    $conjunto2 = $_POST['conjunto2'];
    $formateoConjunto1 = str_replace([' ', '{', '}'], "", $conjunto1);
    $formateoConjunto2 = str_replace([' ', '{', '}'], "", $conjunto2);
    $array1 = explode(",", $formateoConjunto1);
    $array2 = explode(",", $formateoConjunto2);

    switch ($operacion) {


        case 'union':

            $union = array_unique(array_merge($array1, $array2));

            echo "Conjunto 1 = {", $formateoConjunto1, "}";
            echo "<br>";
            echo "Conjunto 2 = {", $formateoConjunto2, "}";
            echo "<br>";
            echo "<b>Conjunto 1 ∪ Conjunto 2 = </b>";
            $arrayUnion = implode(', ', $union);
            echo "<b>{", $arrayUnion, "}</b>";

            break;

        case 'interseccion':

            $interseccion = array_intersect($array1, $array2);

            echo "Conjunto 1 = {", $formateoConjunto1, "}";
            echo "<br>";
            echo "Conjunto 2 = {", $formateoConjunto2, "}";
            echo "<br>";
            echo "<b>Conjunto 1 ∩ Conjunto 2 = </b>";
            $arrayInterseccion = implode(', ', $interseccion);
            echo "<b>{", $arrayInterseccion, "}</b>";

            break;

        case 'diferencia':

            $diferencia = array_diff($array1, $array2);
            $diferencia2 = array_diff($array2, $array1);

            echo "Conjunto 1 = {", $formateoConjunto1, "}";
            echo "<br>";
            echo "Conjunto 2 = {", $formateoConjunto2, "}";
            echo "<br>";
            echo "<b>Conjunto 1 \ Conjunto 2 = </b>";
            $arrayDiferencia = implode(', ', $diferencia);
            echo "<b>{", $arrayDiferencia, "}</b>";
            echo "<br>";
            echo "<b>Conjunto 2 \ Conjunto 1 = </b>";
            $arrayDiferencia2 = implode(', ', $diferencia2);
            echo "<b>{", $arrayDiferencia2, "}</b>";

            break;

        case 'diferencia_simetrica':

            $diferencia = array_diff($array1, $array2);
            $arrayDiferencia = implode(', ', $diferencia);

            $diferencia2 = array_diff($array2, $array1);

            $diferenciaSimetrica = array_unique(array_merge($diferencia, $diferencia2));

            echo "Conjunto 1 = {", $formateoConjunto1, "}";
            echo "<br>";
            echo "Conjunto 2 = {", $formateoConjunto2, "}";
            echo "<br>";
            echo "<b>Conjunto 1 ∆ Conjunto 2 = </b>";
            $arrayDiferenciaSimetrica = implode(', ', $diferenciaSimetrica);
            echo "<b>{", $arrayDiferenciaSimetrica, "}</b>";

            break;

        case 'complemento':

            $diferencia = array_diff($array1, $array2);
            $arrayDiferencia = implode(', ', $diferencia);

            $diferencia2 = array_diff($array2, $array1);

            $diferenciaSimetrica = array_unique(array_merge($diferencia, $diferencia2));

            echo "Conjunto U = {", $formateoConjunto1, "}";
            echo "<br>";
            echo "Conjunto 2 = {", $formateoConjunto2, "}";
            echo "<br>";
            echo "<b>Conjunto 2' = </b>";
            $arrayDiferenciaSimetrica = implode(', ', $diferenciaSimetrica);
            echo "<b>{", $arrayDiferenciaSimetrica, "}</b>";

            break;

        case 'universal':

            $union = array_unique(array_merge($array1, $array2));

            echo "Conjunto U = {", $formateoConjunto1, "}";
            echo "<br>";
            echo "Conjunto 2 = {", $formateoConjunto2, "}";
            echo "<br>";
            echo "<b>Conjunto U = </b>";
            $arrayUnion = implode(', ', $union);
            echo "<b>{", $arrayUnion, "}</b>";

            break;

        default:

            echo "<div class='alert alert-warning' role='alert'>
                    No se ha podido resolver la operación, favor verificar
            </div>";
            break;
    }
}
