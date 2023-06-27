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
// Foreach
$nombre =[1,2,3,4,5,6,7,8,9,10];
foreach ($nombre as $nb){
    echo ($nb**2)."est le carée de $ <br>";
}
$animaux = ["poule"=>3,"chats"=>2];
foreach ($animaux as $animal=>$nb){
    echo "j'ai $nb $animal <br>";
}
?>
<?php
$nombre =[1,2,3,4,5,6,7,8,9,10];
foreach ($nombre as $nb){
    echo ($nb**2)."est le carée de $ <br>";
}
print_r($nombre);
echo $nb*= 2; 
$nb = "toto";
print_r($nombre);
?>
<br>
<?php 
$tab = [ [3,"riri"],[4,"fifi"],[5,"loulou"]];
foreach ($tab as list($a, $b)){
    echo "$a pour $b";
}
?><br>
    <?php
    $n = 1;
    if ( $n % 2 ){
        echo ("$n est pair");
    }
    else {
        echo "$n est impair"; 
    }
    ?> <br>  
    <?php
    $n = 10;
    if ( $n % 2 ):
        echo ("$n est pair");
    else :
        echo ("$n est impair"); 
    endif;
    ?> 
    <br>  
     <?php
    $n = 1;
    if ( $n > 0 ):
        echo ("$n positif");

    elseif ( $n < 0 ):
        echo ("$n negatif"); 
    else: 
        echo "$n = 0";
    endif;
    ?> 
    <br>
    <?php 
    //echo ($n %2)? "impair" : "pair";
     //$pluie="0"// on $pluie="pluie")
    //echo $pluie? : "soleil";
    //echo $nom?? $prenom?? "toto";
    ?>
    <br>
<?php
for ($i=0; $i<= 10; $i++){
    if ($i==3)continue;
    echo $i."<br>";
}
for ($i=0; $i<= 10; $i++){
    if ($i==3) goto toto;
    echo $i."<br>";
}
echo "Bonne nuit";
toto:
echo "Bonjour.<br>";
?>
<?php
for ($i=0; $i<=10;$i++){
for ($j=0; $j<= 10; $j++){
    if ($j>5) break 2;
    echo"$i*$j=".($i*$j)."<br>";
}
echo"<br>";
}
?>
   <?php
    $x = 2; 
    
    switch($x){
        case 0:
            echo '$x stocke la valeur 0';
            break;
        case 1:
            echo '$x stocke la valeur 1';
            break;
        case 2:
            echo '$x stocke la valeur 2';
            break;
        case 3:
            echo '$x stocke la valeur 3';
            break;
        case 4:
            echo '$x stocke la valeur 4';
            break;
        default:
            echo '$x ne stocke pas de valeur entre 0 et 4';
    }
?>
<br>
<?php
    $plat = "pizza"; 
    
    switch($plat){
        case "bouger":
            echo "Passer aux Frites";
            break;
        case "pizza":
            echo "main";
            break;
        case 2:
            echo "passer salade et montre";
            break;
        case "poisson":
            echo 'vendre par kilo';
            break;
        case orange:
            echo "vendre en sac";
            break;
        default:
            echo "bef";
    }
?>
<br>
<?php
    $plat = "true"; 
    switch($n>0){
        case "bouger":
            echo "positif";
            break;
        case $n<0:
            echo "negatif";
            break;
        case $n = 0 ;
            echo "nul";
            break;
        default:
            echo "$ n'est pas un chiffre";
    }
?>
<?php
// Match 
echo match ($plat){
    "pizza", "burger" => "miam",
    "nem"=> "prendre salade",
    default => "frites"
};
?>
<?php
for ($i=1; $i<=10;$i++){
    echo ($i**2)."est le carré de $i <br>";
}
?>
<?php
for ($i=1; $i<=10;$i+=2){
    echo ($i*2)."est le carré de $i <br>";
}
?>


<?php
for ($i=1; $i<=100; $i++){
    if ($i % 33 == 0)
    echo ("$i");
}
?>


</body>
</html>