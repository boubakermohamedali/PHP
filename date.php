<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST">
        <label for="prenom"></label>
        <input type="prenon"name="prenom">
        <label for="email" name="email"></label>
        <input type="email" name ="email">
        <label for ="date_de_naissance"></label>
        <input type="date" name="date_de_naissance">
        <input type="submit" value="valider"></form>
</body>
</html>
<?php
if(isset($_POST['prenom'] )&& isset($_POST['email'])&& isset($_POST['date_de_naissance'])){
$date = date_create($_POST['date_de_naissance']);
echo date_format($date, 'Y-m-d H:i:s');
}
$date = date_create('2000-01-01');
echo date_format($date, 'Y-m-d H:i:s');
//$Mois = date_format($date, 'Y-m-d H:i:s');
//echo "mois:".$Mois;
$signes = array("Capricorne","Verseau","Poisson","Bélier","Taureau","Gémeaux","Cancer","Lion","Vierge","Balance","Scorpion","Sagittaire");
//$age=array("31 28 30 33 38 20 14 10 36 80 12 22");
$mois = ["January", "February"," March"," April","May","June","July","August","September","October","November","December"];
// Transforme un Timestamp Unix en date jj/mm/aaaa
function Timestamp2Date($timestamp,$format)
{
if ($format == "") {
$format="d/m/Y";
}
return date($format, $timestamp);
}
?>