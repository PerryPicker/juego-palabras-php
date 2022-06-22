<?php

session_start();
$palabrasCorrectas = $_SESSION["palabras"];

foreach ($palabrasCorrectas as $palabraCorrecta) {
  $palabraIngresada = $_POST["palabraIngresada" . array_search($palabraCorrecta, $palabrasCorrectas)];

  if ($palabraIngresada == $palabraCorrecta) {
    echo "¡<b>$palabraIngresada</b> es correcta! <br>";
  } else {
    echo "¡<b>$palabraIngresada</b> es incorrecta! La palabra correcta es <b>$palabraCorrecta</b> <br>";
  }
}