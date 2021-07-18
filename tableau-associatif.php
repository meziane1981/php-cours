<?php
  /*$joueur["nom"] = "Doe";
  $joueur["prenom"] = "John";
  $joueur["score"] = 300;
  //print_r($joueur);

  $joueur = array(
      "nom" => "Doe",
      "prenom" => "John",
      "score" => 300
  );
  //print_r($joueur);

  echo $joueur["prenom"]." ".$joueur["nom"]." a un score de ".$joueur["score"];*/
  $equipe[] = "Jack Sparrow";
  $equipe[] = "John Doe";
  $equipe[] = "Obi-Wan Kenobi";

  $joueur["nom"] = "Doe";
  $joueur["prenom"] = "John";
  $joueur["score"] = 300;

  $equipe[] = $joueur;
  print_r($equipe);

?>