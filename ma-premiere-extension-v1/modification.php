<?php
  /*$fichier = fopen("test.txt", "a+") or die("Impossible d'accéder au fichier");
  $text = chr(13)."Une nouvelle ligne.";
  fwrite($fichier, $text);
  fclose($fichier);*/
  
  $fichier = fopen("test.txt", "r+") or die("Impossible d'accéder au fichier");
  fseek($fichier,14);
  $text = "Fichier modifié le ".date("j/n/Y");
  fwrite($fichier, $text) or die("Impossible d'écrire dans le fichier texte");
  fclose($fichier);
?>