<?php
/**
 * FOR
 * for(variable contador, condicion, actualizando contador){
 * Bloque de instrucciones
 * }
 */

$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<p>$resultado</p>";
}

echo "<h1>El resultado es: $resultado </h1>";

for($contador = 1; $contador <=10; $contador++){
    if($numero == 45){
        echo "No se pueden monstrar estas operaciones prohibidas";
    }
    echo "$numero x $contador = ".($numero * $contador)."<br/>";
}

?>