<?php
  $motcle = $_POST["motcle"];
  $duree = $_POST["duree"];
  setcookie("motcle", $motcle, time() + 100 * 24 * 3600, "/");
  setcookie("duree", $duree, time() + 100 * 24 * 3600, "/");
  echo "Les données ont bien été mémorisées."
?>