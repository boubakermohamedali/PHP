<?php
// 1

function notFound()
{
  return 404;
  echo "ERROR: Page non trouvée!<br>";
}

function greetLearner()
{
  return "<3";
  echo "Salut, stagiaire!<br>";
  echo "Tu as fait de gros progrès en PHP!<br>";
  echo "XOXO, Julia<br>";
}

$error = notFound(); 
$heart = greetLearner();

echo "J'ai reçu un code $error, mais ce n'est pas trop grave car j'ai aussi reçu un $heart.<br>";

// 2

$string1 = "les crapauds sont gentils";
$string2 = "le père noël existe";
$string3 = "clémentine est une couleur ou un fruit";


function convertToQuestion($string){
  $string="Tu penses que ".$string."?<br>";
}
//function convertToQuestion($string){
 // return"Tu penses que ".$string."?<br>";
//}
 //echo convertToQuestion($string1);
 //echo convertToQuestion($string2);
 //echo convertToQuestion($string3);
//3
$language = "PHP";
$topic = "portée";
$topic2="fonction";

function generateLessonName( $language,$concept)
{
  $lesson=0;
  $lesson++;
  return $language . " leçon ".$lesson." : " . $concept;
}

echo generateLessonName( $language,$topic);
echo generateLessonName( $language,$topic2);