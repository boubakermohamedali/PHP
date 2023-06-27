<?php
$month= date("F");
switch ($mouth){
    case "Decembre";
    case "January";
    case "February";
    echo "Winter";
    break;
    case "March";
    case "April";
    case "May";
    echo "spring";
    break;
    case "June";
    case "July";
    case "August";
    echo "Summer";
    break;
    case "September";
    case "October";
    case "Nevember";
    echo"Autumn";
        break;
}
?>
<?php
$month = date ("F");

$food = 'cake';

$saision= match ($month) {
    'Summer' => 'This month is an Summer',
    'Autumn' => 'This month is a Autumn',
    'Winter' => 'This month is a Winter',
    'spring' => 'This month is a spring',
};

var_dump($saision);
?>
?>