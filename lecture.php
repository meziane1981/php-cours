<?php
  /*$fichier = fopen("test.txt","r") or die("Ouverture du fichier impossible");
  while (!feof($fichier)) {
    $ligne = fgets($fichier);
    echo $ligne."<br>";
  }  
  fclose($fichier);*/
  
  $fichier = fopen("test.txt","r") or die("Ouverture du fichier impossible");
  while (!feof($fichier)) {
       $c = fgetc($fichier);
       if (ord($c) == 13) {
         echo "<br>";
       }  
       else {
         echo $c;  
       }  
  }  
  fclose($fichier);
?>