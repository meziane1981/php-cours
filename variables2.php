<?php
  $nom = "Doe";
  $prenom = "John";
  $score = 100;
  echo $prenom." ".$nom.". Mon score est ".$score." points<br>";
  $score += 10;
  echo $prenom." ".$nom.". Mon score est ".$score." points<br>";

  $a = 10;
  $b = 4;
  echo "Addition : ".$a." + ".$b." = ".($a+$b)."<br>";
  echo "Soustraction : ".$a." - ".$b." = ".($a-$b)."<br>";
  echo "Multiplication : ".$a." * ".$b." = ".($a*$b)."<br>";
  echo "Division : ".$a." / ".$b." = ".($a/$b)."<br>";
  echo "Modulo : ".$a." % ".$b." = ".($a%$b)."<br>";
  echo "Puissance : ".$a." ** ".$b." = ".($a**$b)."<br>";

?>