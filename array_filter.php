<?php
$notes=["Adam"=>12, "Alexandra"=>9, "Aaron"=>8, "Béatrice"=>14, "Carl"=>7, "Danielle"=>11, "David"=>12, "Elona"=>15, "Fred"=>16, "Françoise"=>10, "George"=>15, "Héléna"=>14, "Hank"=>10, "Iness"=>13, "John"=>11, "Jasmine"=>18, "Joe"=>13, "Laura"=>19, "Marc"=>20, "Mathilde"=>8];
$min=12;
//$f=function ($v) use ($min){
//return $v>=$min;};
//$bons=array_filter($notes,$f);
// print_r(($bons));
$bons=array_filter($notes,function ($v) use ($min){return $v>=$min;});
print_r($bons);
$nombres_premiers = array(2, 3, 5, 7, 11, 13, 17); 
$animaux = ["chien", "chat", "tortue", "vache"];
$chasse_au_tresor = ["ordures", "chat", 99, ["canette de soda", 8, ":)", "boue", ["trucs", "peluche", ["OR !"], "grotte", "chauve-souris", "scorpion"], "pierre"], "paillettes", "clair de lune", 2.11] ;
$signes = array("Capricorne","Verseau","Poisson","Bélier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire");
$mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
//Créer un tableau $signes_astro qui associe les signes en valeurs aux mois en clés et afficher le résultat
$signes_astro= array_combine ($mois, $signes);
print_r($signes_astro);
sort( $animaux);
print_r($animaux);

?>