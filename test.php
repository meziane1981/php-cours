<?php
  session_start();
  if (isset($_SESSION["pseudo"])) {
    echo "La variable de session existe : ".$_SESSION["pseudo"];
  }
  else {
    echo "La variable de session n'est pas disponible";
  }
?>