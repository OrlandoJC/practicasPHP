<?php


function calculo($operacion, $numero1, $numero2){
  return $operacion($numero1, $numero2);
}


#funciones anonimas asignadas a variables
$division = function(){
  return $numero1 / $numero2;
};

$resta = function(){
  return $numero1 - $numero2;
};


//entran los parametros y se sustituye $operacion por la funcion anonima asiganda a las variables de
//operacion

calculo($divison, 2, 4);
