<h1>Mon premier plugin</h1>
<p>Bienvenue sur ma première page administration de ma première extension</p>
<form action="options.php" method="post">
  <table class="form-table">
    <tr>
      <th>Option 1</th>
      <td><input type="text" name="option_1" value="<?php echo esc_attr(get_option('option_1')); ?>"</td>
    </tr>
    <tr>
      <th>Option 2</th>
      <td><input type="text" name="option_2" value="<?php echo esc_attr(get_option('option_2')); ?>"</td>
    </tr>
    <tr>
      <th>Option 3</th>
      <td><input type="text" name="option_3" value="<?php echo esc_attr(get_option('option_3')); ?>"</td>
    </tr>
  </table>
  <?php
    settings_fields("mes-options");
    do_settings_sections("mes-options");
    submit_button();
  ?>
</form>

