<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i=1; $i<=100; $i++){
        if ($i % 30 == 0)
        echo ("fizz");
    }
    ?>
    <?php
    $i=0;
    while ($i<=100){
        if ($i % 15 == 0){
         echo ("fizzBuzz");
        } elseif ($i % 3 == 0){
         echo ("fizz"); 
        } elseif ($i % 5 == 0){
         echo("Buzz");
        } else{
        echo ($i);} 
         $i++; 
        }
    ?>
</body>
</html>