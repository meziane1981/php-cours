<?php
  session_start();

  if (isset($_POST["pseudo"])) {
      $_SESSION["pseudo"] = $_POST["pseudo"];
  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Variables de session</title>
  </head>
  <body>
    <?php
      if(isset($_SESSION["pseudo"])) {
          echo "Bienvenue ".$_SESSION["pseudo"];
      }
      else {
          echo "Vous n'êtes pas connecté...";
      }
    ?>

    <p><a href="http://localhost/cours-php/test.php">Tester la variable de session</a></p>
  </body>
</html>