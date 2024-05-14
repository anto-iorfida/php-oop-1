<?php
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/type.php';
require_once __DIR__ . '/date.php';

$movies = [
    $mad_max,
    $matrix,
    $interstellar,
    $inception,
    $avengers,
    $babylon,
    $creed
]

?>




<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php echo $babylon->getFullName(); ?> <br>
    <?php echo $creed->getFullName(); ?>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>