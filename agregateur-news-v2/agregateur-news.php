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
?>