<?php
setlocale(LC_TIME, 'fr_FR', 'fra');
$result = utf8_encode(strftime('%A %d %B %Y'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 3</title>
</head>
<body>
<?= $result ?>
</body>
</html>