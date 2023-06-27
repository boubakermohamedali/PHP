<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br/>
    <h2>Forms:</h2>
    <br>
    <form method="GET">
        <input name="titre">
        <input type="submit" value="envoyer">
    </form> 
    <?php
    echo $_POST['titre']??"";
    echo "<br>";
    ?>
    <form method="GET">
        <input name="titre">
        <input type="submit" value="envoyer">
    </form> 
    <?php
    echo"<br>";
    echo $_POST['titre']??"Pas encore rempli!";
    ?>
    <?php
    $nombre =[1=>51,2=>307,3=>93,4=>522,5=>144,6=>28,7=>43,8=>93,9=>78];
    ?> 
</body>
</html>