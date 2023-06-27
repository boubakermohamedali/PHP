<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="0">
<tr>
<?php
//$i=2;
for ($i=1; $i <=10; $i++){
    $j =$i*7;
    echo"<td>$i</td><td>*7=</td><td>$j</td>";
}
echo"<br>";
?>
</tr>
</table>
    <?php

echo bindec('110011') . "\n";
echo bindec('000110011') . "\n";
echo bindec('101');
echo"<br>";
// Nombre 1
$nombre1 = rand(0,1000);
// Nombre 2
$nombre2 = rand(0,1000);
// Somme
$somme = $nombre1 + $nombre2;
// Affichage
echo"$nombre1 + $nombre2  = $somme"; 
echo"<br>";
?>
<?php

$initial = '555';
$dec = "125";
$bin = "01001";
$hex = "ff00a2";
$oct = "4750";
echo decbin($dec); // décimal vers binaire
echo dechex($dec); // décimal vers hexadécimal
echo decoct($dec); //décimal vers octal
echo bindec($bin); // binaire vers décimal
echo hexdec($hex); // hexadécimal vers décimal
echo octdec($oct); // octal vers décimal
$hexa_var = 0x150 ; // Définition d&#39;un nombre en base hexadécimale
$octal_var = 0150; // Définition d&#39;un nombre en base octale
echo $dec_var;
echo"<br>";
?>

</body>
</html>