<?php
  /*
  Plugin Name: Ma première extension
  Plugin URI: https://mon-site-web.com
  Author: John Doe
  Version: 1.0
  Author URI: https://mon-site-web.com
  */

  function ajouterLienMenu() {
    add_menu_page('Ma première extension', 'Ma première extension', 'manage_options', 
                  'ma-premiere-extension', 'afficherPage', 'dashicons-admin-comments', 4);
  }
  add_action("admin_menu", "ajouterLienMenu");

  function afficherPage() {
      if (!current_user_can('manage_options')) {
          wp_die(__("Vous n'avez pas les droits nécessaires pour accéder à cette page."));
      }
      else {
          include(sprintf("%s/page_extension.php", dirname(__FILE__)));
      }
  }
  function initialiserFormulaire() {
      register_setting("mes-options", "option_1");
      register_setting("mes-options", "option_2");
      register_setting("mes-options", "option_3");
  }
  add_action("admin_init", "initialiserFormulaire");
?>