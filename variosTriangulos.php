<?php

$varios = $argv[1];

if(! $varios > 0 ){
  echo "Favor enviar um numero maior que zero \n";
  return;
}

for ($i=0; $i <$varios ; $i++) {
  for ($x=1; $x <= 5; $x++) {
      for ($y=0; $y < $x ; $y++) {
        echo '*';
      }
      echo "\n";
  }
  echo "\n";
}
 ?>
