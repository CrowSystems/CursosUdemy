<?php
//Constantes
//Es un contenedor de información que no puede variar

define('nombre', 'Carlos De jesus');
define('web', 'crowsystems.com.mx');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

//Variable
$web = "crowsystems.com.mx/academy";
$web = "crowsystems.com.mx/cursos";
echo '<h1>'.$web.'</h1>';

function holaMundo(){
    echo __FUNCTION__;
}
holaMundo();

/*
Las constantes existen dentro de PHP para 
poderlas utilizar solo es necesario mandarlas
llamar para ejecutarse, en php tienen 
predefinidas constantes que se pueden utilizar
para la optimización del codigo.
*/

?>