<?php
/*
Plugin Name: Mes tâches
Plugin URI: https://mon-site-web.com
Description: Gestion des tâches à réaliser
Author: John Doe
Version: 1.0
Author URI: https://mon-site-web.com
*/

function installer() {
    global $wpdb;
    $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}gestion_tache (id INT AUTO_INCREMENT PRIMARY KEY, nom_tache VARCHAR(255) NOT NULL);");
}
register_activation_hook(__FILE__, "installer");

function desinstaller() {
    global $wpdb;
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}gestion_tache;");
}
register_uninstall_hook(__FILE__, "desinstaller");

function ajouterGestionTachesAuMenu() {
    add_menu_page("Mes tâches", "Mes tâches", "manage_options", "gestion-taches", "afficherTaches", "dashicon-admin-comments", 5);
}
add_action("admin_menu", "ajouterGestionTachesAuMenu");

function afficherTaches() {
    if (!current_user_can("manage_options")) {
        wp_die(__("Vous n'avez pas les droits pour accéder à cette page"));
    }
    else {
        include(sprintf("%s/formulaire.php", dirname(__FILE__)));
    }
}

global $wpdb;
if (isset($_POST["nom_tache"]) && !empty($_POST["nom_tache"])) {
    $nom_tache = $_POST["nom_tache"];
    $wpdb->insert("{$wpdb->prefix}gestion_tache", array("nom_tache"=>$nom_tache));
}

function listeTaches($atts, $titre) {
  global $wpdb;
  $liste_taches = $wpdb->get_results("SELECT nom_tache FROM {$wpdb->prefix}gestion_tache");
  $html = array();
  $html[] = "<h2>$titre</h2>";
  if ($liste_taches) {
      $html[] = "<ul>";
      foreach ($liste_taches as $tache) {
          $html[] = "<li>".$tache->nom_tache."</li>";
      }
      $html[] = "</ul>";
  }
  else {
      $html[] = "Aucune tâche à accomplir";
  }
  return implode("", $html);
}
add_shortcode("liste_taches", "listeTaches");
?>