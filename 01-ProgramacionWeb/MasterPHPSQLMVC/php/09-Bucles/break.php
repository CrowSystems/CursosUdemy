<?php
//Ejemplo tabla multiplicar

if(isset($_GET['numero'])){
    //Cambiar tipo de datos
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero <br/>";

for($contador = 1; $contador <=10; $contador++){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    if($numero == 45){
        echo "No se pueden mostrar estas operaciones prohibidas";
        break;
    }
}
?>