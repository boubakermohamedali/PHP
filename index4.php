<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'head.php';?>
    <h1>Exemple formulaire et PHP</h1>
<h2>Superglobals:</h2>
$_REQUEST:
<?php print_r($_REQUEST)?>
<br>
$_GET:
<?php print_r($_GET)?>
<br>
$_POST:
<?php print_r($_POST)?>
<h2>Forms:</h2>
<form method="GET">
GET Form: <input type="text" name="get_name">
<input type="submit" value="Submit GET">
</form>
<!--ajouter dans form l'attribut enctype="multipart/form-data" ajouter un input de type file-->
<form method="post">
POST Form: <input type="text" name="post_name">
<!--ajouter un input de type file-->
<input type="submit" value="Submit POST">
</form>
<a href="index.php">Reset</a>
</body>
</html>