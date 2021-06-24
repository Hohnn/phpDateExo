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

echo "<h1>exo1</h1>";
// méthode objet
$date = new DateTime(); # j'instancie un objet date selon la classe DateTime
echo $date->format("d/m/Y") . "<br>";

// méthode procédurale
echo date("d/m/Y");

echo "<h1>exo2</h1>";
// méthode objet
$date = new DateTime();
echo $date->format("d-m-Y") . "<br>";

// méthode procédurale
echo date("d-m-Y");

echo "<h1>exo3</h1>";
// on store la locale pour une utilisation ultérieure
$currentLocale = setlocale(LC_TIME, "0");
// on set la locale en français
setlocale(LC_TIME, "fr_FR", "fra");
// on affiche ex Le mercredi 01 juin 2021
echo strftime("Le %A %d %B %G") . "<br>";
// exemple de date avec un accent: ne pas oublier le utf8_encode
echo utf8_encode(strftime("Le %A %d %B %G", time() - 15500000)) . "<br>";

echo "<h1>exo4</h1>";
// la date du jour à 15h00. Nous sommes le 24 juin 2021
echo strtotime('today 15:00') . "<br>";
echo mktime(15, 0, 0, 6, 24, 2021);
// le timestamp du mardi 2 aout 2016 à 15h00
echo strtotime("02/08/2016 15:00") . "<br>";

echo "<h1>exo5</h1>";
// on prend le timestamp du jour moins le timstamp du 16/05/2016 et je divise par un 86400 secondes (= une journée) et je l'arrondi à l'entier
echo round((time() - strtotime("16-05-2016")) / 60 * 60 * 24) . "<br>";

// instanciation d'un nouvel objet avec la date du jour
$date1 = new DateTime(date(""));
// avec la date du 24-09-2021
$date2 = new DateTime("24-09-2021");
// j'utilise la méthode diff puis la méthode format pour obtenir le nombre de jours
echo $date2->diff($date1)->format("%R %a jours");

echo "<h1>exo6</h1>";
// méthode 1
echo cal_days_in_month(CAL_GREGORIAN, 2, 2016) . " jours <br>";

// méthode 2
$date3 = strtotime("2016-02-01");
$date4 = strtotime("2016-03-01");
echo floor(($date4 - $date3) / 86400) . " jours <br>";

// méthode 3
echo date("t", mktime(0, 0, 0, 2, 1, 2016)) . " jours <br>";

echo "<h1>exo7</h1>";
// méthode 1: on prend le timestamp du jour et on AJOUTE 86400 secondes * 20 jours
echo strftime("Le %A %d %B %G", time() + 86400 * 20) . "<br>";

// méthode 2: attention format anglais !
echo date("l d F Y", strtotime("+20 days")) . "<br>";

echo "<h1>exo8</h1>";
// méthode 1: on prend le timestamp du jour et on ENLEVE 86400 secondes * 20 jours
echo strftime("Le %A %d %B %G", time() - 86400 * 22) . "<br>";

// méthode 2: attention format anglais !
echo date("l d F Y", strtotime("-20 days")) . "<br>";
?>

</body>
</html>