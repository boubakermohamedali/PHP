<?php

$nombres=[
    1 => 51,
    2 => 307,
    3 => 93,
    4 =>522,
    5 =>144,
    6 =>28,
    7 => 43,
    8 => 93,
    9 => 78];
for ($c=1;$c<10;$c++){
    for($d=1;$d<10;$d++){
        for($u=1;$u<10;$u++){  
            $nb=$c*100+$d*10+$u;
            $poids=$nombres[$c]+$nombres[$d]+$nombres[$u];
            if($poids==$nb);
            echo $nb."<br>";
    }
}   
}