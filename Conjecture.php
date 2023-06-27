<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label for ="saisie" name="saisie">Siasie un nombre supérieur à zero</label>
        <input type="text" name="saisie">
        <input type="submit" value="envoyer">
    </form>
    <?php
    //$saisie =[1=>51,2=>307,3=>93,4=>522,5=>144,6=>28,7=>43,8=>93,9=>78];
   
        
        //
    if(isset($_POST['saisie'])){
    //$saisie=$_POST["saisie"];
    function nombre($saisie){
    echo $_POST['saisie']??"saisie un nombre supérieur à zero";}
    while ($saisie =!0){
        if($saisie % 2==0){
            $saisie =$saisie /2;}
        else {
            $saisie=$saisie*3+1;}
            echo $saisie."";
        }
        { echo"Afficher un nombre egal à zero";}
    }

    ?>
    </body>
</html>