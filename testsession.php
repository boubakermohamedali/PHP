<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method ="Post">
    <input type ="text" name="session">
    <input type ="submit" value="Envoyer"> 
</form>
<?php session_start();
if (!empty($_POST ['non'])){
if ($_POST['nom'] == "logout"){ 
    session_destroy();
}else{
    $_session['data'] =$_POST ['non'];
}
}
if(!empty($_session)) print_r($_session);
if(!empty($_POST)) print_r($_POST);
?>
</body>
</html>