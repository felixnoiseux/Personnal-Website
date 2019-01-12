<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Felix Noiseux</title>
</head>
<body>
<!--Tu as pas d'affaire ici-->
<!--Plz stay away-->
<?php
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  exec("/home/pi/Desktop/UpdateWebsite.sh");
}
?>

<a href="?run=true">Mettre à jour le contenu du site web.</a>
</body>
</html>