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
?>