<?php
/*
Plugin Name: Agrégateur de news
Plugin URI: https://mon-site-web.com
Author: John Doe
Version: 1.0
Author URI: https://mon-site-web.com
*/

function ajouterMenu() {
    add_menu_page("Agrégateur de news", "Agrégateur de news", "manage_options",
                  "agregateur-news", "affPage", "dashicons-admin-comments", 4);
}
add_action("admin_menu", "ajouterMenu");

function affPage() {
    if (!current_user_can("manage_options")) {
        wp_die(__("Vous n'avez pas les droits nécessaires pour accéder à cette page."));
    }
    else {
        include(sprintf("%s/page_extension.php", dirname(__FILE__)));
    }
}

function initFormulaireNews() {
    register_setting("news-options", "news_mot_cle");
    register_setting("news-options", "news_duree");
}
add_action("admin_init", "initFormulaireNews");

function affiche_news($atts) {
      $motcle = get_option("news_mot_cle");
      $duree = get_option("news_duree");
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
      $html=array();
      for ($i=0; $i<10; $i++) {
        $html[] = $t[$i]["lien"]."<br>";
        if ($i==0) {
          $fichier = fopen("archive.html", "a+") or die("Impossible d'accéder au fichier");
          fwrite($fichier, $t[$i]["lien"]."<br>".chr(13)) or die("Impossible d'écrire dans le fichier");
          fclose($fichier);
        }
      }
      return implode("", $html);
}
add_shortcode("google_news", "affiche_news");
?>