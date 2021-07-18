<?php
$data[] = array(1570174991, "Windows 10, les MAJ de sécurité KB4524147, KB4524148 et KB4524149 débarquent, bilan - GinjFo", "https://www.ginjfo.com/actualites/logiciels/windows-10/windows-10-les-maj-de-securite-kb4524147-kb4524148-et-kb4524149-debarquent-bilan-20191004");
$data[] = array(1570119936, "Windows 10X : nouveau menu Démarrer, disponibilité, compatibilité, on sait presque tout du nouveau système de Microsoft - Phonandroid", "https://www.phonandroid.com/windows-10x-nouveau-menu-demarrer-barre-des-taches-disponibilites-compatibilites.html");
$data[] = array(1570200283, "Windows 10 Pro à 10,39 € et Office 2019 Pro Plus à 43,19 € chez URcdkey - Phonandroid", "https://www.phonandroid.com/windows-10-pro-office-2019-pro-plus-chez-urcdkey.html");
$data[] = array(1569942915, "Windows 10 : se connecter avec un compte Microsoft bientôt obligatoire ? - Phonandroid", "https://www.phonandroid.com/windows-10-connecter-compte-microsoft-bientot-obligatoire.html");
$data[] = array(1569746658, "Windows 10 : Microsoft finalise la mise à jour 19H2, vous pourrez bientôt la télécharger - Phonandroid", "https://www.phonandroid.com/windows-10-mise-a-jour-19h2-en-approche.html");
$data[] = array(1569483523, "Windows 10 : Microsoft promet de rendre les mises à jour moins agaçantes, peut-on encore y croire ? - Phonandroid", "https://www.phonandroid.com/windows-10-microsoft-laissera-ignorer-mises-jour-inutiles.html");
$data[] = array(1569830825, "Windows 10 : découvrez les meilleurs antivirus d’août 2019 - Phonandroid", "https://www.phonandroid.com/windows-10-decouvrez-meilleurs-antivirus-aout-2019.html");
$data[] = array(1570197960, "Les meilleures suites de sécurité pour Windows 10 - Le Parisien", "http://www.leparisien.fr/guide-shopping/high-tech/informatique/les-meilleures-suites-de-securite-pour-windows-10-26-09-2019-8160390.php");

rsort($data);
foreach($data as $unArticle) {
    echo date("d/m/Y",$unArticle[0])." - ";
    echo "<a href='".$unArticle[2]."'>".$unArticle[1]."</a><br>";
}
?>