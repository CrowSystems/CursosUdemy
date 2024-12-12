<?php
/**
 * DO WHILE
 * ESTRUCTURA
 * DO {
 * BLOQUE DE INSTRUCCIONES
 * }WHILE(CONDICION);
 */
$edad = 18;
$contador = 1;

do {
    echo "Tienes acceso al local provado $contador <br/>";
    $contador++;
}while($edad >= 18 && $contador <= 10);
?>