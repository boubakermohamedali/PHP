<?php
echo chr(101);
$string="Portez ce vieux eau au juge qui fume";
var_dump(explode(" ",$string));
echo"<br>";
$string="Portez ce vieux cafe au juge qui fume";
echo ucfirst($string);
echo"<br>";
$string = "Ceci\r\nest\n\rune\nchaîne\r";
echo nl2br($string)."<br>";
$prenom ='monkey';
printf ("Bonjour %s",$prenom);
echo"Bonjour$prenom";
echo"<br>";
$string="Portez ce vieux cafe au juge qui fume numero 150365";
if (str_contains($string,'cafe')){
    echo "afficher le numero";
}else {
    echo "Portez ce vieux cafe au juge qui fume";
}
echo"<br>";
$string ="Bonjour tous le monde,Afficher le code,Lire un mot";
$string = strtok($string, " ");
 
while ($string !== false)
   {
   echo "$string<br>";
   $string = strtok(" ");
   }
   $string= "ecrire un email et afficher le le 4 chifree";
   echo "addslashes $string"; 
?>
