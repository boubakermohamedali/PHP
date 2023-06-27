<?php

 for ($nb= 1; $nb<=100; $nb++){
    if ($nb%3==0 && $nb%5==0)
    {
        echo"FizzBuzz";
    }
    elseif($nb%5==0)
    {
         echo"Buzz";
    }
    elseif ($nb%3==0 ){
        echo "Fizz"; 
    }
    else {
        echo "$nb";
    }
    echo "<br>"; 
    }
    $nb= 1;
    while ( $nb<=100)
    {
        if ($nb%3==0 && $nb%5==0)
        {
            echo"FizzBuzz";
        }
        elseif($nb%5==0)
        {
             echo"Buzz";
        }
        elseif ($nb%3==0 ){
            echo "Fizz"; 
        }
        else {
            echo "$nb";
        }
        $nb++;
        echo "<br>"; 
        }

?>