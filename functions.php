<?php

function helloWorld(){
return " Hello"." "."World!";

}
echo helloWorld();


function quiEstLeMeilleurProf(){
return "\nMon super formateur de PHP";

}
echo quiEstLeMeilleurProf();

function jeRetourneMonArgument($arg="abc"){
return $arg;

}
echo jeRetourneMonArgument($arg="\nabc");


function concatenation($string="kingsley",$string1="coleman"){

return 
$string.$string1;


}
echo concatenation($string="kingsley",$string1="coleman");




function  concatenationAvecEspace($string="kingsley",$string1="coleman"){
return 
$string." ".$string1;

}
 echo concatenationAvecEspace($string,$string1);





 
function getFirstWord($string="La vie est belle"){

    $mot= explode(" ",$string);
return
$mot[0];
}
echo getFirstWord($string="La vie est belle");






function getLastWord($string="J'adore les exercices de php"){
    
$mot= explode(" ",$string);
return
$mot[3];


}
echo getLastWord($string="J'adore les exercices de php");


//function estIlMajeur($int){


//}