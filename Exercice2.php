<?php
function somme($argument1,$argument2){
    return($argument1+$argument2);
}
echo somme(6,5)."<br>";
function soustraction ($argument1,$argument2){
    return($argument1-$argument2);
}
echo soustraction(5,4)."<br>";
function multiplication ($argument1,$argument2){
    return($argument1*$argument2);
}
echo multiplication(5,4)."<br>";
$Time=54197;
function heuresMinutesSecondes($Time){
    if($Time < 3600){ 
        $heures = 0; 

        if($Time < 60){$minutes = 0;} 
        else{$minutes = round($Time / 60);} 
        
        $secondes = floor($Time % 60); 
        } 
        else{ 
        $heures = round($Time / 3600); 
        $secondes = round($Time % 3600); 
        $minutes = floor($secondes / 60); 
        } 
        
        $secondes2 = round($secondes % 60); 
        return"<br>".$heures."Heures"."<br>".$minutes."Minutes"."<br>".$secondes."Secondes";
}
echo heuresMinutesSecondes(9700000);
?>