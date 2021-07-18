<?php
  if (isset($_COOKIE["motcle"]) && isset($_COOKIE["duree"])) {
      echo "Mot-clé : ".$_COOKIE["motcle"]."<br>";
      echo "Durée : ".$_COOKIE["duree"]."<br>";
  }
  else {
      echo "Les cookies ne sont pas accessibles";
  }
?>