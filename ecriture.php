<?php
  $fichier = fopen("test.txt" , "w") or die("Impossible de créer le fichier<br>");
  $text = "Hello World ! Fichier créé le ".date("j/n/Y");
  fwrite($fichier, $text);
  fclose($fichier);
  echo "Ecriture dans le fichier terminée."
?>