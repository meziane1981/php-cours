<?php
  $joueur["nom"] = "Doe";
  $joueur["prenom"] = "John";
  $joueur["age"] = 24;
  $joueur["admin"] = false;
  $joueur["inscription"] = time();

  $data_json = json_encode($joueur);

  echo $data_json;

  $nom_fichier = "joueur.json";
  $fichier = fopen($nom_fichier, "w+");
  fwrite($fichier, $data_json);
  fclose($fichier);


?>