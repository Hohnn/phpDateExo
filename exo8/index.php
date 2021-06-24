<?php
setlocale(LC_TIME, 'fr_FR', 'fra');
date_default_timezone_set('Europe/Paris');
$result = utf8_encode(strftime('%A %d %B %Y %H:%M'));
$result = time() - (22 * 24 *60 * 60);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 8</title>
</head>
<body>
<p>La date du jour moins 22 jour est  <?= date('Y-m-d', $result)?> </p>
</body>
</html>