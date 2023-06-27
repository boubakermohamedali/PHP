<?php
$int=2; $int1=5;
function plusGrand($int,$int1){
    if ($int>$int1)
return 
$int;
else {
    return $int1;
}
}
echo plusGrand($int,$int1)."<br>"; 
$int=2; $int1=5;
function pluspetit($int,$int1){
    if ($int<$int1)
return 
$int;
else {
    return $int1;
}
}
echo pluspetit($int,$int1);
echo"<br>";
function lepluspetit($int,$int1,$int2){
    if($int<$int1 && $int<$int2){
return $int;}
elseif ($int1<$int && $int1<$int2){
    return $int1;}

else {
    return $int2;
}
}
echo pluspetit(300,200,300);
?>