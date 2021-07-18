<div class="wrap">
  <h1>Mes tâches à faire</h1>
  <form action="?page=gestion-taches" method="post">
    <label for="nom_tache">Ajouter une tâche : </label>
    <input type="text" name="nom_tache">
    <input type="submit" value="Ajouter">
  </form>
  <h2>Liste des tâches à faire : </h2>
  <?php
    global $wpdb;
    $liste_taches = $wpdb->get_results("SELECT nom_tache FROM {$wpdb->prefix}gestion_tache");
    if ($liste_taches) {
        echo "<ul>";
        foreach ($liste_taches as $tache) {
            echo "<li>".$tache->nom_tache."</li>";
        }
        echo "</ul>";
    }
  ?>
</div>