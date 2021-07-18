<?php
  if (isset($_COOKIE["user"])) {
      echo $_COOKIE["user"];
  }
  else {
      echo "Le cookie user n'a pas été défini ou a expiré";
  }

?>