<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue au café</h1>
    <?php
    $p=["C","f"];
    foreach ($p as $value){
        //prix des pâtisseries en euro  
        echo $value;
       // print_r ($p);
    }
    ?>
    <h2>pâtisseries ! ( 3 € la part)</h2>
    <?php
    $b=["G"=>2,"Y"=>5];
foreach ($b as $klye =>$value) {
   echo"<br> $klye : $value €";"\n";
    // prix des boissons en euro
}
    ?>
    

</body>
</html>