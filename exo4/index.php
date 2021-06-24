<?php
setlocale(LC_TIME, 'fr_FR', 'fra');
date_default_timezone_set('Europe/Paris');
$result = utf8_encode(strftime('%A %d %B %Y %H:%M'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 4</title>
</head>
<body>
<?= time() ?> <br>
<?= strtotime("2 August 2016 15 hours"), "\n"; ?>
</body>
</html>