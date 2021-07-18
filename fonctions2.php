<?php
  /*function calcul(int $param1, int $param2) {
      // Une ou plusieurs instructions PHP
      $resultat = $param1 * $param2;
      return $resultat;
  }
  echo calcul("10", 4);*/

  $prenom = "John";
  $nom = "Doe";
  
  function saluerJoueur($prenom, $nom) {
    echo "Bienvenue ".$prenom." ".$nom;
  }
  saluerJoueur("Jane","Doe");
  echo "<br>".$prenom." ".$nom;
?>