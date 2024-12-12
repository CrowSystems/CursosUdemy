<?php
//ejemplo 1

if(isset($_GET['numero'])){
    //cambiar el tipo de dato
    $numero = (int) $_GET['numero']; 
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero </h1>";

$contador = 1;
while($contador <= 10){
    echo    "$numero x $contador".($numero*$contador)."<br/>";
    $contador++; 
}
?>