<?php
define("PFC",["pierre"=>0,"feuille"=>1,"ciseaux"=>2]);
define("emoPFC",["🪨","📃","✂️"]);
$score_joueur=0;
$score_ordi=0;
while($score_ordi<3 && $score_joueur<3){
    $ordi=random_int(0,2);
    do{
        $joueur=readline("Que voulez-vous jouer ( pierre, feuille, ciseaux) ?");
        $joueur=strtolower($joueur);
        if($joueur!="pierre" && $joueur!="feuille" && $joueur!="ciseaux")
            echo "Veuillez saisir un choix valide\n";
    }while($joueur!="pierre" && $joueur!="feuille" && $joueur!="ciseaux");
    echo "\nVous : ".emoPFC[PFC[$joueur]]."  VS ".emoPFC[$ordi]." : Ordi\n";
    echo "\n Résultat de la manche : ";
    switch(PFC[$joueur]-$ordi){
        case 0 : 
            echo "Égalité !!!";
            break;
        case -2 : 
        case 1 :
            echo "🏆 Gagné !!!";
            $score_joueur++;
            break;
        case -1:
        case 2:
            echo "Perdu 😢";
            $score_ordi++;
            break;
   }
    echo "\n";
}
echo "\n Résultat de la partie : ";
if($score_joueur==3)
    echo "🏆 3 victoires ! Gagné !!!";
else
    echo "3 défaites... Perdu 😢";
echo "\n";

?>
