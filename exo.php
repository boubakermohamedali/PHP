<?php
//Début algorithme
//Déclaration des variables:âge,prénom,sexe
//Début 
//echo("Quel âge avez-vous?");
//$âge = readline ("âge");
$age = $_POST["age"];
echo("votre âge est : $age,<br>");
//echo("comment vous appelez-vous?");
//$prénom = readline ("prénom");
$prenom = $_POST["prenom"];
echo("votre prénom est: $prenom,<br>");
//echo("<br>");
//echo("sexe");
$sexe = $_POST["sexe"];
echo("votre sexe est: $sexe,<br>");
//Fin 
//Fin algorithme
?>

