<?php
  //$data_json = '{"nom":"Doe","prenom":"John","age":24,"connecte":false,"inscription":1568107229}';

  $nom_fichier = "joueur.json";
  $fichier = fopen($nom_fichier, "r+");
  $data_json = fgets($fichier);
  fclose($fichier);
  
  $tableau = json_decode($data_json, true);

  echo $tableau["nom"]."<br>";
  echo $tableau["inscription"];
?>