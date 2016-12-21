<?php

/**
 *
 */

class jugadorDado
{




  //Propiedades e Inicializacion

  private $minNumDado=0;
  private $maxNumDado=12;
  private $tiradas=[];

//Getters y setters

public function setminNumDado($minNumDado){
  $this->minNumDado->minNumDado;
}

public function getminNumDado(){
  return $this->minNumDado;
}

public function setmaxNumDado($maxNumDado){
  $this->maxNumDado->maxNumDado;
}

public function getmaxNumDado(){
  return $this->maxNumDado;
}

//metodos imprimirTiradas y calcularMediaTiradas

public function imprimirTiradas(){
  print_r($this->tiradas);
}

//Sacar o calcular la media
public function calcularMediaTiradas(){
$media=array_sum($this->tiradas)/count($this->tiradas);
echo "<br>";
echo "La media es: ". round($media);
}

//guardarTirada

public function guardarTirada($tirarDado){
  $this->tiradas[]=$tirarDado;
}
//tirarDado
public function tirarDado(){
  $tirarDado=rand($this->minNumDado, $this->maxNumDado);
  $this->guardarTirada($tirarDado);
  return $tirarDado;


  }

}

  ?>
