<?php
  $data = simplexml_load_file("data.xml");
  //var_dump($data);
  foreach($data->livre as $livre) {
      echo $livre->titre.", par ".$livre->auteur."<br>";
  }
?>