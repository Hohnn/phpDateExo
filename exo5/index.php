<?php
setlocale(LC_TIME, 'fr_FR', 'fra');
date_default_timezone_set('Europe/Paris');
$result = utf8_encode(strftime('%A %d %B %Y %H:%M'));
$ajd = time();
var_dump($ajd);
$date = strtotime("16 may 2016");
var_dump($date);
$calc = $ajd - $date;
$result = floor($calc / 86400);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 5</title>
</head>
<body>
<p>Le nombre de jour entre aujourd'hui et le 16 mai 2016 est  <?= $result?> jours </p>
</body>
</html>