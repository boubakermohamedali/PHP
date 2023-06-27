<?php /*
phpinfo();*/
?>
<?php
$dec=255;
$hex=0xFF;
$oct=0o377;
$bin=0b11111111;
var_dump($dec,$hex,$oct,$bin);
/*
echo intval(1e10)."<br>";
echo intval("1e10")."<br>";
echo intval(42,8)."<br>";
echo intval ('42', 8)."<br>";
$b=(0.1+00.8)*10 ;*/
echo"j\ai une moyenne de 20/20 en PHP"."<br>";
echo" un fichier dans C:langer\www"."<br>";
echo" un fichier dans C:langer\\www"."<br>";
$nom="toto"."<br>";
echo"Bonjour$nom"."<br>";
echo"J'ai gagné 2 $ <br>";
$nom="rose"."<br>";
echo"Bonjour$nom"."<br>";
echo"J'ai 3 ${nom}s";

$prenom="Jolia";
echo $prenom[1];
$nom=[["Rose","Fleur"],["toto","Chien"]];
echo $nom[0][0]."<br>";
$tab=["3"=>"trois","fleur"=>"tulipe"];
print_r($tab);
    echo $tab[3];
    echo $tab["fleur"];
    $tab[3]="three";
print_r($tab);
$tab[]="tartompion";

["3"=>$var1,"fleur"=>$var2]=$tab;
echo$var1;
echo$var2;
$tab1=["riri",...$tab,"fifi"];
print_r($tab1);

/*
$Tab=["3"=>"trois","fleur"=>"tulipe"];
print_r($Tab);
    echo $Tab[3];
    echo $Tab["fleur"];
    $Tab[3]="three";
print_r($Tab);
["3"=> $var1,"fleur"=>$var2]=$Tab;
    echo$var1;
    echo$var2;

$Tab=["3"=>"three","fleur"=>"tulipe"]; 
["3"=>$var1,"fleur"=>$var2]=$Tab;
echo $var1;
echo $var2;
$tab1=["riri",...$Tab,"fifi"];
print_r($tab1);*/
$prenom="Fifi";
$texte="Bonjour";
$texte.=$prenom;
$texte.="<br>";
$texte.="Comment ça va?";
echo $texte;


