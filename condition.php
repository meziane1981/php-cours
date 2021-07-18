<?php
  $score = 90;

  if ($score>100) {
      echo "Bravo ! Vous avez gagné !";
  }
  else if ($score == 100){
      echo "Vous avez perdu, mais vous avez les félicitations du jury.";
  }
  else {
    echo "Désolé, vous avez perdu";
  }
?>