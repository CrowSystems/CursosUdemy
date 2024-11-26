<?php
$cadena = 'Hola mundo a todos';
echo strlen($cadena);
echo'<br>';
echo str_replace('h','H',$cadena);
echo '<br>';
echo strtolower($cadena);
echo '<br>';
echo strtoupper($cadena);
echo '<br>';
echo substr($cadena, 0, 4);
echo '<br>';
echo substr($cadena, 5,5);
?>