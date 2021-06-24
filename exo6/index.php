<?php
setlocale(LC_TIME, 'fr_FR', 'fra');
date_default_timezone_set('Europe/Paris');
$result = utf8_encode(strftime('%A %d %B %Y %H:%M'));
$startMonth = strtotime("2016/02/01");
var_dump($startMonth);
$startNextMonth = strtotime("2016/03/01");
var_dump($startNextMonth);
$calc = $startNextMonth - $startMonth;
$result = floor($calc / 86400);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6</title>
</head>
<body>
<p>Le nombre de jour dans le mois de fevrier est  <?= $result?> jours </p>
</body>
</html>