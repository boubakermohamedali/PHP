<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
	<input type="text" name="description">
	<input type="submit" value="envoyer">
</form>
<?php

if(!empty($_POST) && !empty($_POST['description'])){
	echo "<p>".htmlspecialchars($_POST['description'])."</p>";
}


?>
</body>
</html>
