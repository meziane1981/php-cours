<?php
  // Boucle while
  $i = 0;
  while ($i<10) {
      echo $i." ";
      $i++;
  }
  echo "<br>";

  // Boucle for
  for ($i=0; $i<10; $i++) {
      echo $i." ";
  }
  echo "<br>";

  // Boucle foreach
  $joueurs[] = "Jack Sparrow";
  $joueurs[] = "John Doe";
  $joueurs[] = "Obi-Wan Kenobi";
  foreach($joueurs as $unJoueur) {
      echo $unJoueur." ";
  }

?>