<?php

# Variable número
$numero = 5;
echo "Variable número: $numero<br>";
#Muestra el tipo de dato y la cantidad de caracteres
var_dump($numero);
echo "<br><br>";
#---------------------------------

# Variable palabra
$texto = "Hola";
echo "Variable texto: $texto<br>";
#Muestra el tipo de dato y la cantidad de caracteres
var_dump($texto);
echo "<br><br>";
#-------------------------------

# Variable boleana
$boleana = true;
echo "Variable boleana verdadero: $boleana<br>";
#Muestra el tipo de dato y la cantidad de caracteres
var_dump($boleana);
echo "<br><br>";
#---------------------------------------------

# Array
$colores = array("rojo","amarillo");
echo "Variable array: $colores[0]<br>";
#Muestra el tipo de dato y la cantidad de caracteres
var_dump($colores);
echo "<br><br>";
#-----------------------------------

# Array con propiedades o llamado identificador
$verduras = array("verdura1" => "lechuga",
	              "verdura2" => "cebolla");

echo "Variable array con propiedades: $verduras[verdura2]<br>";
#Muestra el tipo de dato y la cantidad de caracteres
var_dump($verduras);
echo "<br><br>";
#---------------------------------------

# Variable de tipo objeto
$frutas = (object)["fruta1" => "pera",
	               "fruta2" => "manzana"];

echo "Variable objeto: $frutas->fruta1<br>";

#Muestra el tipo de dato y la cantidad de caracteres
var_dump($frutas);
echo "<br><br>";
#---------------------------------------

?>
