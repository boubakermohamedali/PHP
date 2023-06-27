<?php
 $int=[12, 25, -4, 41, 154, -24, 0, 7];
 function premierElementTableau($tab){
if (empty($tab)){
return null;
} 
else return($tab[0]);
}
echo premierElementTableau($int);
echo"<br>";
$int=[12, 25, -4, 41, 154, -24, 0, 7];
 function dernierElementTableau($tab){
if (empty ($tab)){
return null;
} 
else return end($tab);
}
echo dernierElementTableau($int);
$int=[12, 25, -4, 41, 154, -24, 0, 7];
echo"<br>";
 function  plusGrand($tab){
if (empty ($tab )){
return null;
} 
else return max($tab);
}
echo plusGrand($int);
$int=[12, 25, -4, 41, 154, -24, 0, 7];
 function   plusPetit($tab){
if (empty ($tab )){
return null;
} 
else {return min($tab );
}
 }
echo plusPetit($int);
echo"<br>";
function lesDeuxplusPetit(){
    if(empty($tab)){
        return null;}
        else {return min($tab);
 
}
}
print_r($int);
?>
