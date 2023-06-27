<?php 
if (isset($_POST['description'])){
if (!empty ($_POST['description'])){
    setcookie('username',$_POST['description']);}
    else{
        setcookie('username','',time()-3600);
    }
}
?>
<html>
<from method="POST">
    <input type = "text" name="description">
    <input type = "submit" value ="envoyer">
</html>
<?php 
if(isset($_COOKIE)) print_r($_COOKIE);

?>