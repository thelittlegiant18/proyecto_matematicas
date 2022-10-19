<?php
$union = "0";
$interseccion = "0";
$diferencia = "0";
$diferencia_simetrica = "0";
$complemento = "0";
if (isset($_GET["union"])) {
    $union = $_GET["union"];
    $imagen = "union_de_conjuntos.png";
    $titulo = 'Unión de Conjuntos';
    $parrafo = 'Dado dos (2) conjuntos M y N, se define la unión entre estos dos conjuntos como el conjunto formado por los elementos
                que pertenecen al conjunto M o pertenecen al conjunto N, simbolicamente se define:
                <p><b>MUN = {X/X ∈ M v X ∈ N}</b>.</p>';
    $nota = '<p><b>Nota:</b> Casos Especiales</p>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Si MCN -> M∪N = N</li>
                    <li class="list-group-item">M∪M = M</li>
                    <li class="list-group-item">M∪∅ = M</li>
                </ol>';
    //print_r("Se está recibiendo la operación unión");
} elseif (isset($_GET["interseccion"])) {
    $interseccion = $_GET["interseccion"];
    $imagen = "interseccion_de_conjuntos.png";
    $titulo = 'Intersección de Conjuntos';
    $parrafo = 'Dado dos conjuntos M y N, se define la intersección del conjunto M con el conjunto N, al conjunto formado por los elementos
                que pertenecen al conjunto M y al conjunto N a la vez.
                La intersección del conjunto M con N se dimboliza de la siguiente manera M∩N, simbolicamente se define:
                <p><b>M∩N = {X/X ∈ M ^ X ∈ N}</b>.</p>';
    $nota = '<p><b>Nota:</b> Dos conjuntos son disyuntos cuando su intersección es vacia.</p>
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">M∩N = ∅ = {}</li>
                    <li class="list-group-item">M∩N = Intersecantes</li>
                    <li class="list-group-item">N∩M = N es conjunto de M</li>
                </ol>';
    //print_r("Se está recibiendo la operación Intersección");
} elseif (isset($_GET["diferencia"])) {
    $diferencia = $_GET["diferencia"];
    $imagen = "diferencia_de_conjuntos.png";
    $titulo = 'Diferencia entre Conjuntos';
    $parrafo = 'Dado dos conjuntos M y N, se define la diferencia entre el conjunto M y el conjunto N, al conjunto formado por los elementos
                que pertenecen al conjunto M y NO al conjunto N.
                La Diferencia del conjunto M con N se dimboliza de la siguiente manera M-N o M\N, simbolicamente se define:';
    $nota = '<b>M-N = {X/X ∈ M ^ X ∉ N}</b>.
            <br><b>N-M = {X/X ∉ M ^ X ∈ N}</b>.';
    //print_r("Se está recibiendo la operación diferencia");
} elseif (isset($_GET["diferencia_simetrica"])) {
    $diferencia_simetrica = $_GET["diferencia_simetrica"];
    $imagen = "diferencia_simetrica_de_conjuntos.png";
    $titulo = 'Diferencia Simétrica entre Conjuntos';
    $parrafo = 'Dado dos conjuntos M y N, se define la diferencia simétrica entre el conjunto M y el conjunto N, al conjunto formado por los elementos
                que pertenecen al unión de los dos conjuntos y no pertenecen a la intersección de los dos conjuntos.
                La Diferencia Simétrica del conjunto M con N se dimboliza de la siguiente manera M∆N, simbolicamente se define:';
    $nota = '<b>M∆N = (M∪N)-(M∩N)</b>.';
    //print_r("Se está recibiendo la operación Diferencia Simétrica");
} elseif (isset($_GET["complemento"])) {
    $complemento = $_GET["complemento"];
    $imagen = "complemento_de_conjuntos.png";
    $titulo = 'Complemento de un Conjunto';
    $parrafo = 'Dado el conjunto M referido a un conjunto universal <b>U</b>, el complemento del conjunto M es el conjunto formado
                por los elementos del conjunto universal que no estan en el conjunto M.
                El complemento de un conjunto se denota como:';
    $nota = '<b>M\' = Complemento del conjunto M</b>.
            <br><b>M\' = U-A = {X/X ∈ U ^ X ∉ M}</b>.';
    //print_r("Se está recibiendo la operación Complemento");
} elseif (isset($_GET["universal"])) {
    $complemento = $_GET["universal"];
    $imagen = "conjunto_universal.png";
    $titulo = 'Conjunto Universal';
    $parrafo = 'El conjunto universal es el conjunto formado por todos los elementos del tema de referencia.
                <br>Se representa con la letra U y graficamente se representa con un rectangulo.';
    $nota = '<b>T\' = Complemento del conjunto M</b>.
            <br><b>T\' = {X/X es un N ^ X es par}</b>.
            <br><b>T\' = {2, 4, 6, 8, ...}</b>.';
    //print_r("Se está recibiendo la operación Complemento");
} else {
    header("Location: ./");
}
