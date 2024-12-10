<?php
/**
 * CONDICIONALES
 * IF:
 * if(condicion){
 *  instruccipnes
 * } else {
 *  otras condiciones
 * }
 * 
 * OPERADORES DE COMPARACIÓN
 * ==  IGUAL
 * === IDENTICO (ES MAS EXACTO HAS CON EL TIPO DE DATO)
 * !=  DISTINTO
 * <>  DIFERENTE
 * !== NO IDENTICO
 * <   MENOR QUE
 * >   MAYOR QUE
 * <=  MENOR O IGUAL QUE
 * >=  MAYOR O IGUAL QUE
*/

$color = "rojo";

if($color == "verde"){
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo "<br>";

$year = 2028;
if($year != 2019){
    echo "Es una año diferente a 2019";
} else {
    echo "es un año posterior al 2019";
}
?>