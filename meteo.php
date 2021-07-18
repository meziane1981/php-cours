<?php
  $apiid = "3ecb04ac9091f0064bcc31353fe4155f";
  $data = file_get_contents("http://api.openweathermap.org/data/2.5/weather?id=6455259&appid=$apiid");
  $meteo_paris = json_decode($data, true);
  //echo "<pre>";
  //var_dump($meteo_paris);
  //echo "</pre>";
  echo "Météo à Paris : ".$meteo_paris["weather"][0]["main"];

?>