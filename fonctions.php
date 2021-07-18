<?php
  function calcul(int $param1, int $param2) {
      // Une ou plusieurs instructions PHP
      $resultat = $param1 * $param2;
      return $resultat;
  }
  //echo calcul("10", 4);

  for($i=0;$i<10;$i++) {
    echo calcul($i, $i)."<br>";
  }
?>