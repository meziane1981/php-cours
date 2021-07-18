<h1>Agrégateur Google News personnalisé</h1>
<form action="options.php" method="post">
  <table class="form-table">
    <tr>
      <th>Rechercher</th>
      <td><input type="text" name="news_mot_cle" value="<?php echo esc_attr(get_option('news_mot_cle')); ?>"</td>
    </tr>
    <tr>
      <th>Plage de la recherche</th>
      <td>
        <select name="news_duree">
          <option <?php if (get_option("news_duree")=="Moins d'une heure") echo "selected" ?>>Moins d'une heure</option>
          <option <?php if (get_option("news_duree")=="Aujourd'hui") echo "selected" ?>>Aujourd'hui</option>
          <option <?php if (get_option("news_duree")=="Cette semaine") echo "selected" ?>>Cette semaine</option>
        </select>
      </td>
    </tr>
  </table>
  <?php
    settings_fields("news-options");
    do_settings_sections("news-options");
    submit_button();
  ?>
</form>