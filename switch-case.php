<?php
  $page = "Contact";
  /*if ($page == "Accueil") {
      echo "Vous êtes sur la page Accueil";
  }
  elseif ($page == "Contact") {
      echo "Vous êtes sur la page Contact";
  }
  elseif ($page == "A propos") {
      echo "Vous êtes sur la page A propos";
  }
  else {
      echo "La page demandée n'existe pas";
  }*/

  switch($page) {
      case "Accueil":
        echo "Vous êtes sur la page Accueil";
        break;
      case "Contact":
        echo "Vous êtes sur la page Contact";
        break;
      case "A propos":
        echo "Vous êtes sur la page A propos";
        break;
      default:
        echo "La page demandée n'existe pas";
        break;
  }
?>