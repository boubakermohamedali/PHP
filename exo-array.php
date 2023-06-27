<?php

$nombres_premiers = array(2, 3, 5, 7, 11, 13, 17); 
$animaux = ["chien", "chat", "tortue", "vache"];
$chasse_au_tresor = ["ordures", "chat", 99, ["canette de soda", 8, ":)", "boue", ["trucs", "peluche", ["OR !"], "grotte", "chauve-souris", "scorpion"], "pierre"], "paillettes", "clair de lune", 2.11] ;
$signes = array("Capricorne","Verseau","Poisson","Bélier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire");
$mois = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];
 
// 1 - Afficher le tableau $nombres_premiers
print_r($nombres_premiers);
// 2 - Afficher la liste des animaux dans $animaux séparés par des virgules
echo implode(",",$animaux);
// 3 Ajouter 19 dans $nombres_premiers 
array_push($nombres_premiers,"19");
// et afficher le résultat
print_r($nombres_premiers);
// 4 Afficher chien
echo $animaux[0];
// 5 Afficher Balance
echo (" ".$signes[9]);
// 6 Changer chat en tigre dans $animaux et afficher le résultat
$animaux[1]="Tigre";
print_r($animaux);
// 7 Retirer la vache 
array_pop($animaux);
// et afficher le résultat
print_r( $animaux);
// 8 Ajouter 23, 29, 31, 37, 41 en une seule commande dans $nombres_premiers et afficher le résultat
$nombres_premiers= array_merge($nombres_premiers,[23, 29, 31, 37, 41]);
print_r($nombres_premiers);
foreach($nombres_premiers as $nombre){
    echo $nombre." ";
}
// 9 Retirer le chien 
array_shift($animaux);
// et afficher le résultat
print_r($animaux);
// 10 Ajouter cheval, aigle, dauphin avant tigre et afficher le résultat
array_splice($animaux,0,0,["Cheval","Aigle","Dauphin"]);
print_r($animaux);
//11 Compléter la phrase avec "OR!" du tableau chasse au trésor
$tresor= "<b>J'ai trouvé un coffre plein d'".$chasse_au_tresor[3][4][2][0];
echo $tresor;
// 12 Créer un tableau $signes_astro qui associe les signes en valeurs aux mois en clés 
$signes_astro= array_combine ($mois, $signes);
// et afficher le résultat
print_r($signes_astro);
// 13 Trier le tableau $animaux par odre alphabétique et afficher le résultat
sort( $animaux);
print_r($animaux);
// 14 Faire passer les mois en valeurs et les signes en clés dans le tableau $signes_astro et afficher le résultat
$signes_astro = array_flip ($signes_astro);
print_r($signes_astro);

















//Trier le tableau $signes_astro par signes dans l'ordre alphabétique décroissant et afficher le résultat

krsort($signes_astro);
foreach($signes_astro as $signes => $tri){
echo $signes.$tri;

}

//afficher février avec votre nouveau tableau
echo array_search("Février",$signes_astro);


