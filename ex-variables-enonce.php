<?php
var_dump(1 + 2) ; echo '<br/>';
var_dump('1'+ '2'); echo '<br/>';
var_dump(1 . 2) ; echo '<br/>';
var_dump('1'. '2'); echo '<br/>';
var_dump("3 fruits" + '1 légume' . 'donnent'); echo '<br/>';
var_dump("3 fruits" . '1 légume' + 'donnent'); echo '<br/>';
var_dump(1/2 + true - "-2");echo '<br/>';


$var1="Les ";
$var2="7 merveilles du monde";
$var3=$var1.$var2;
$var4=$var2+13;
$var2=&$var3;
$var1=&$var3;
$var5=$var3;
$var6=$var3*$var2;
$var7=$var6+$var5+$var4;


$var1="1+3";
$var2="3E2";
$var3=$var1.$var2;
$var4=$var2+$var2;
$var2=&$var3;
$var1=&$var3;
$var5=$var3;
$var6=$var3*$var2;
$var7=$var6+$var5+$var4;
