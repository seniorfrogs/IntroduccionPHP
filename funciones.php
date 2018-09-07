<?php

#Funciones
function saludo(){
    echo "Hola<br>";
}
#Ejecutar función sin parametros
saludo();
#----------------------------------

#Fuiones con parametros
function nameFuncion($nameVariable){
    echo $nameVariable."<br>";
}
#Ejecutar funcion con parametros
nameFuncion("Que tal");

#Funciones con retorno

function retorno($retornar){
  return $retornar;
}
  echo retorno("Soy el retorno");

?>
