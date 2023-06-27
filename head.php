<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic 8</title>
</head>
<body>
  <br>
  <?php

if ($_SERVER['REQUEST_METHOD']==="POST"){
	if ($_POST["sim"]<1){
		echo "non génétiquement reliés";
	}elseif($_POST["sim"]<3){
		echo "cousins 1er degré";
	}elseif($_POST["sim"]<6){
		echo "cousins 2nd degré";	
	}elseif($_POST["sim"]<14){
		echo "cousins germains";	
	}elseif($_POST["sim"]<35){
		if (abs($_POST["age1"]-$_POST["age2"])>40) echo "gd parents/ptt enfants";
		elseif (abs($_POST["age1"]-$_POST["age2"])>20) echo "oncles - tantes/ neveux - nièces";
		else echo "1/2 frères et soeurs";	
	}elseif($_POST["sim"]<100){
		if (abs($_POST["age1"]-$_POST["age2"])>20) echo "parents/enfants";
		else echo "frères et soeurs";	
	}else{
		echo "jumeaux";
	}
}else{?>	
<form method="POST">
	<p><label for="age1">Âge du 1er sujet : </label>
	<input type="number" id="age1" name="age1" max="120" min="0"></p>
	<p><label for="age2">Âge du 2nd sujet : </label>
	<input type="number" id="age2" name="age2" max="120" min="0"></P>
	<p><label for="sim">% de similitude ADN : </label>
	<input type="number" id="sim" name="sim" max="100" min="0"></p>
	<input type="submit" value="Analyser">
</form>
<?php }
?>
<!--
  <br> -->
<?php
/*
if ($_SERVER['REQUEST_METHOD']==="POST")
if ($_POST == "100") {
  echo "vrais jumeaux!";
} elseif ($t <= 99)  {
  echo "fréres ou soeurs!";
}
elseif (35 <= $t) {
  echo "parents en-fant";
}
 elseif ($t <=34) {
  echo "gd parents/!";
}
    elseif (14 <= $t){
    echo "ptt enfant/!";
}
  else 
  echo "abs";
?>*/
</body>
</html>