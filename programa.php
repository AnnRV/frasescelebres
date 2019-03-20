<?php
function frasescelebres(){
include 'frasescelebres.php';
//var_dump($frascel);
// saber el número de elementos que tiene
$numarray =count($frascel)-1;
//generar un número aleatorio entre 0 y el número total del array -1
$aleatorio =rand(0,$numarray);
//imprimir el array por pantalla
return $frascel[$aleatorio]; //return almacena
}
//echo frasescelebres();
?>