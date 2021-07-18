<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Paramétrage du flux</title>
    <style>
      label {
          display: inline-block;
          width: 10rem;
          margin: 1rem;
      }
    </style>
  </head>
  <body>
    <h1>Paramétrage des news</h1>
    <form method="post" action="traitement-news.php">
      <label>Recherche</label>
      <input type="text" size="80" name="motcle"><br>
      <label>Plage de la recherche</label>
      <select name="duree">
        <option>Moins d'une heure</option>
        <option>Aujourd'hui</option>
        <option>Cette semaine</option>
      </select><br>
      <label></label><input type="submit" value="Choisir ces paramètres">
    </form>
  </body>
</html>