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
 * 
 * 
 * OPERADORES LOGICOS
 * &&   AND o Y
 * ||   OR o O
 * !    NOT NO
 * and, or  
*/
//Ejemplo 1
$color = "rojo";

if($color == "verde"){
    echo "El color es rojo";
} else {
    echo "El color no es rojo";
}

echo "<br>";

//Ejemplo 2
$year = 2028;
if($year != 2019){
    echo "Es una año diferente a 2019";
} else {
    echo "es un año posterior al 2019";
}

//Ejemplo 3
$nombre = "David Extremadura";
$edad = 18;
$mayoriaEdad = 18;
$continente ="Europa";
$ciudad = "Madrid";

if($edad >= $mayoriaEdad){
    echo "<h1>$nombre es mayor de edad</h1>";

    if($continente == "Europa"){
        echo "<h2>Y es  de $ciudad</h2>";
    } else {
        echo "No es de Europa";
    } 
} else {
    echo "<h2>$nombre No es de mayor de edad</h2>";
}

echo "<hr>";

//Ejemplo 4
$dia = 7;
if($dia == 1){
    echo "LUNES";
} elseif($dia == 2){
    echo "MARTES";
} elseif($dia == 3){
    echo "MIERCOLES";
} elseif($dia == 4){
    echo "JUEVES";
} elseif($dia == 5){
    echo "VIERNES";
} else {
    echo "ES FIN DE SEMANA";
}

echo "<hr/>";

//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edadOficial = 20;

if($edadOficial >= $edad1 && $edadOficial <= $edad2) {
    echo "ESTA EN EDAD DE TRABAJAR";
} else {
    echo "NO PUEDE TRABAJAR";
}

echo "<hr/>";

$pais = "Mexico";
if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "Este pais habla español";
} else {
    echo "Este pais no hablan español";
}

echo "<hr/>";

//Ejemplo SWITCH

$dia2 = 4;

switch ($dia2){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break; 
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
    case 5:
        echo "Viernes";
        break;
    default:
    echo "Fin de Semana";
}
?>