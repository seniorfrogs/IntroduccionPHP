<?php
#Que ladren los perros

#Condiciones
$a=10;
$b=15;

if ($a > $b) {
  echo "$a es mayor que $b";
}

elseif ($a == $b) {
  echo "Los número son iguales";
}

else {
  echo "$b es mayor que $a";
}
#------------------------------------

echo "<br>";
#Switch
$dia = "viernes";

switch ($dia) {

  case 'sabado':
    echo "Estudiré PHP";
    break;

  case 'viernes':
    echo "Iré de fiesta";
    break;

  case 'domingo':
    echo "Voy a descansar";
    break;

  case 'lunes':
    echo "De nuevo a la escuela";
    break;

  default:
    echo "Caso no encontrado";
    break;
}
#------------------------------------
echo "<br>";
#Ciclos

# While
$n=1;
while ($n <= 10) {
  echo $n;
  $n++;
}
#------------------------------

echo "<br>";
# Do while

$p=1;

do {
  echo $p;
  $p++;
} while ($p <= 10);

#---------------------------
echo "<br>";
# For
for ($i=0; $i <= 10; $i++) {
  echo $i;
}

?>
