<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
function $text{
    ($nom_special,$nom,$adjectif,$loisir,$objet,$couleur,$taille,$verbe,$adverbe,$meuble,$decoration,$exclamation,$lieu,$verbe2);


   echo(" <h1>L’affaire du ____________ disparu</h1>
    <p>
Il était une fois un détective qui s’appelait ____________. Un jour, le
 Nom
voisin du détective frappa à la porte.<br>
« Je suis très ____________ », dit le voisin.<br>
« J’ai perdu mon Adjec%f ____________.<br> 
Je l’ai vu avant de partir pour mon club de ____________, et
 *Nom spécial* Loisir à mon retour il avait disparu ! »<br>
Le détective s’empara d’un crayon et d’un ____________, et demanda :
 Objet
« Pouvez-vous me le décrire ? »
« Bien sûr », répondit le voisin.<br>
« Il est ____________, ____________ et
 Couleur Taille il ne ____________ jamais ».<br>
 Verbe
Le détective chercha ____________ dans tous les ____________ et Adverbe meuble
derrière tous les ____________.<br>
 Décora%on
« ____________ ! », s’exclama le détective, « Je l’ai trouvé !<br>
 Il était Exclama%on juste en dessous de votre ____________ ! » Lieu <br>
Ils se mirent tous deux à ____________ et le détective se dit,
 Verbe2<br>
« Et voilà une nouvelle affaire résolue ! »</p>");}
$text{$nom_special="télécommande", $nom="L",$adjectif="inquiet",$loisir="cerf-volant",$objet="bloc-notes",$couleur="rouge flamboyant",$taille="20 centimètres",$verbe="miaule",
    $adverbe="rapidement",$meuble="placards",$decoration="pots de plantes" $exclamation="Maseltov",$lieu="tapis",$verbe2="rire";
}
if($_SERVEUR['REQUEST_METHOD']==="POST")
echo text(...$_POST);
else

//</body>
//</html>
?>
<form method="POST">
<p>
    <label for="emotion">Choisissez une émotion</label>
    <input type="text" name="emotion" id="emotion">
</p>
<p>
    <label for="couleur">Choisissez une couleur</label>
    <input type="text" name="couleur" id="couleur">
</p>
<p>
    <label for="meteo">Choisissez une météo</label>
    <input type="text" name="meteo" id="meteo">
</p>
<p>
    <label for="vetement">Choisissez un vêtement</label>
    <input type="text" name="vetement" id="vetement">
</p>
<p>
    <label for="chaussure">Choisissez une type de chaussures</label>
    <input type="text" name="chaussure" id="chaussure">
</p>
<p>
    <label for="verbe">Choisissez un verbe</label>
    <input type="text" name="verbe" id="verbe">
</p>
<p>
    <label for="vehicule">Choisissez un véhicule</label>
    <input type="text" name="vehicule" id="vehicule">
</p>
<p>
    <label for="objet">Choisissez un objet</label>
    <input type="text" name="objet" id="objet">
</p>
<p>
    <label for="plat">Choisissez un plat</label>
    <input type="text" name="plat" id="plat">
</p>
<p>
    <label for="restaurant">Choisissez un type de restaurant</label>
    <input type="text" name="restaurant" id="restaurant">
</p>
<p>
    <label for="temperature">Choisissez une température</label>
    <input type="text" name="temperature" id="temperature">
</p>
<p>
    <label for="animal">Choisissez un animal</label>
    <input type="text" name="animal" id="animal">
</p>
<p>
    <label for="adjectif">Choisissez un adjectif</label>
    <input type="text" name="adjectif" id="adjectif">
</p>
<p>
    <label for="meuble">Choisissez un meuble</label>
    <input type="text" name="meuble" id="meuble">
</p>
<p>
    <label for="ville">Choisissez une ville</label>
    <input type="text" name="ville" id="ville">
</p>
<p>
    <label for="direction">Choisissez une direction</label>
    <input type="text" name="direction" id="direction">
</p>
<p>
    <input type="submit" value="Envoyer">
</p>
</form>
<?php
}
?>
  
