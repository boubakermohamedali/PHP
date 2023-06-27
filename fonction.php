<?php
function AfficheSomme($a,$b){
echo $a + $b;
}
$f='AfficheSomme';
$f(2,3);
$x=36;
$y=42;

AfficheSomme(2,3);
AfficheSomme(4,5);
AfficheSomme($x,$y);