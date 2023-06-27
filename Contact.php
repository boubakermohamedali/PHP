<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Contactez-nous</h1>

<form action="envoyer.php" method="POST" action="index4.php">

<label for="nom">Nom :</label>

<input type="text" id="nom" name="nom" required><br>


<label for="email">E-mail :</label>

<input type="email" id="email" name="email" required><br>


<label for="sujet">Sujet :</label>

<input type="text" id="sujet" name="sujet" required><br>


<label for="message">Message :</label>

<textarea id="message" name="message" required></textarea><br>


<input type="submit" value="Envoyer">

</form>
<br>
<h1> Bienvenue sur ma page d'accueil ! </h1 >
<p> Du texte. </p>
<p> Un peu plus de texte. </p>
<?php include 'footer.php' ; 
?>

