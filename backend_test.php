<?php
$array1 = array("green", "red", "blue", "black", 1, 2, 4);
$array2 = array("green", "yellow", "red", "black", "white", 1);
$array3 = array("red", "blue", "yellow", 1, 6);

$conjunto1 = [];
$conjunto2 = [];

$arrayString1 = implode(', ', $array1);
$arrayString2 = implode(', ', $array2);
$arrayString3 = implode(', ', $array3);

$interseccion = array_intersect($array1, $array2);
$arrayInterseccion = implode(', ', $interseccion);

$diferencia = array_diff($array1, $array2);
$arrayDiferencia = implode(', ', $diferencia);

$union = array_unique(array_merge($array1, $array2));
$arrayUnion = implode(', ', $union);

$diferencia2 = array_diff($array2, $array1);

$diferenciaSimetrica = array_unique(array_merge($diferencia, $diferencia2));
$arrayDiferenciaSimetrica = implode(', ', $diferenciaSimetrica);

if (isset($_POST['operacion'])) {

    $operacion = strtoupper($operacion = $_POST['operacion']);

    $prueba = $_POST['conjunto1'];
    $prueba2 = $_POST['conjunto2'];

    //print_r($prueba);
    //print_r($prueba2);

    // $test = str_replace("\n", "<br>", $operacion);
    // $resultado = str_replace(["\n"], "&", $operacion);
    // parse_str($resultado, $usuario);

    //print_r($usuario);  // value

    //$resultado2 = str_replace([' ', '{', '}'], "", $usuario);
    //$contenidoFiltrado = implode(",", $prueba);
    $test = str_replace([' ', '{', '}'], "", $prueba);
    $test = explode(",", $test);
    $test2 = str_replace([' ', '{', '}'], "", $prueba2);
    $test2 = explode(",", $test2);

    $interseccion = array_intersect($test, $test2);
    //$arreglo = array_chunk(explode(' ', $contenidoFiltrado), 1);

    //$keys = array_keys($resultado2);

    // $new_array = [];
    // foreach ($arreglo as $index => $item) {
    //     $caso = explode(",", $item[0]);
    //     array_push($new_array, $caso);
    // }

    foreach ($interseccion as $values) {
            echo $values . " ";
    }

    //$result = call_user_func_array('array_intersect', $new_array);
    //$result = array_intersect(...$new_array);    
    // print_r($test);
    // echo "<br>";
    // print_r($test2);
    // echo "<br>";
    // print_r($interseccion);

    // $interseccion1 = array();

    // for ($i = 0; $i < count($new_array[0]); $i++) {
    //     for ($j = 0; $j < count($new_array[1]); $j++) {

    //         if ($new_array[0][$i] == $new_array[1][$j]) {
    //             //echo $array2[$i];
    //             $interseccion1[] = $new_array[0][$i];
    //         }

    //         $interseccion1 = array_unique($interseccion1);
    //     }
    // }
    // echo $test;
    // echo "<br>";
    // echo $keys[0] . ' ∩ ' . $keys[1] . ' = ';
    // $cpp = implode(",", $interseccion1);
    // echo $cpp;
    // echo "<br>";

    // $unique = array_unique(array_merge(...$new_array));
    // asort($unique);
    // //print_r($unique);

    // echo $keys[0] . ' ∪ ' . $keys[1] . ' = ';
    // foreach ($unique as $values) {
    //     echo $values . " ";
    // }
}
