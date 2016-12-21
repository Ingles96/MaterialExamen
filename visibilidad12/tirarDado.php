<?php

include 'visibilidad12.php';

$tirar= new jugadorDado();

$minNumDado=0;
$maxNumDado=12;


for ($i=0; $i < 12; $i++) {
  echo $tirar->tirarDado() ."<br>";
}

$tirar->imprimirTiradas();
$tirar->calcularMediaTiradas();

 ?>
