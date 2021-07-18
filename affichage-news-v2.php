<?php
  if (isset($_COOKIE["motcle"]) && isset($_COOKIE["duree"])) {
      $motcle = $_COOKIE["motcle"];
      $duree = $_COOKIE["duree"];
      if ($duree == "Moins d'une heure") {
        $chaine = "https://news.google.com/?output=rss&q=".$motcle."%20when%3A1h&hl=fr&gl=FR&ceid=FR%3Afr";
      }
      else if ($duree == "Aujourd'hui") {
        $chaine = "https://news.google.com/?output=rss&q=".$motcle."%20when%3A1d&hl=fr&gl=FR&ceid=FR%3Afr";
      }
      else if ($duree == "Cette semaine") {
        $chaine = "https://news.google.com/?output=rss&q=".$motcle."%20when%3A7d&hl=fr&gl=FR&ceid=FR%3Afr";
      }
      $data = simplexml_load_file($chaine);
      foreach ($data->channel->item as $item) {
          $title = $item->title;
          $link = $item->link;
          $date = strtotime($item->pubDate);
          $lien = "<a href='".$link."'>".$title."</a>";
          $unlien["date"] = $date;
          $unlien["lien"] = $lien;
          $t[] = $unlien;
      }
      rsort($t);
      for ($i=0; $i<10; $i++) {
        echo $t[$i]["lien"]."<br>";
      }
  }

?>