<?php
//Q1
function helloWord(){
    return "texte à afficher";
}
echo helloWord()."<br>";
//Q2
function EstLeMeilleurProf(){
    return "Mon super formateur";
}
echo EstLeMeilleurProf();
echo "<br>";
//Q3
function jeRetourneMonArgument($_arg){
    return $_arg;
}
echo $_arg="n\abc.123";
echo"<br>";
//Q4
$_argument1="Kingsley";
$_argument2="KingsleyComan";
{
    return($_argument1.$_argument2);
}
echo $_argument1.$_argument2."\n";
echo"<br>";
//Q5
$_argument1="Manuel";
$_argument2="Neuer";
function concatenationAvecEspace($_argument1,$_argument2){
return ($_argument1.$_argument2);
}
echo $_argument1." ".$_argument2."\n";
echo"<br>";
//Q6
$argument="Afficher moi un test";
function getFirstWord($argument){
    $mot= explode("",$argument);
    return $mot[0];
}
echo getFirstWord($argument="Afficher moi un test")."<br>";
//Q7
function getLastWord($string="Attention faitez pas des fautes"){
    $mot= explode("",$string);
    return ($mot[4]);
}
echo getLastWord($string="Attention faitez pas des fautes");
?>
