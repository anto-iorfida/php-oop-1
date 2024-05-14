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
    <h2>FILM</h2>
    <div class="container">
        <!-- forech per stampare tutti i dati di tutti i film -->
        <?php foreach ($movies as $movie) {   ?>
            <div class="items">
                <h5>Titolo: <?php echo $movie->title ?></h5>
                <p>Anno: <?php echo $movie->years ?></p>
                <p>Registra:<?php echo $movie->moviedirector ?></p>
                
                <p>Genere:</p>
                <ul>
                    <?php
                    // verificare se ci sono generi e stamparli
                    if ($movie->type->type1 !== null) {
                        echo '<li>' . $movie->type->type1 . '</li>';
                    }
                    if ($movie->type->type2 !== null) {
                        echo '<li>' . $movie->type->type2 . '</li>';
                    }
                    if ($movie->type->type3 !== null) {
                        echo '<li>' . $movie->type->type3 . '</li>';
                    }
                    if ($movie->type->type4 !== null) {
                        echo '<li>' . $movie->type->type4 . '</li>';
                    }
                    ?>
                    
                     <!-- <li>  <?php echo $movie->type->type1 ?></li> 
                     <li>  <?php echo $movie->type->type2 ?></li> 
                     <li>  <?php echo $movie?->type->type3 ?></li> 
                     <li>  <?php echo $movie?->type->type4 ?></li>  -->
                </ul>
            </div>
        <?php } ?>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>