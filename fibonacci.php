<?php

$valorAtual = 0;
$valorAntecessor1 = "0";
$valorAntecessor2 = "1";


for ($x=0; $x < 15; $x++) {

    if ($x == 1) { //eh feio, eu sei, mas recursividade nao da.
      $valorAtual = 1;
      $valorAntecessor1 = 0;
      $valorAntecessor2 = 1;
    }

    echo $valorAtual. ", ";

    $valorAtual = $valorAntecessor1 + $valorAntecessor2;

    $valorAntecessor1 = $valorAntecessor2;

    $valorAntecessor2 = $valorAtual;

}

echo $valorAtual . "\n";

 ?>
