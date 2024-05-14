<?php


$babylon_type = new Type('Drammatico','Comico');
$babylon = new Movie('Babylon', '2023', 'Damien Chazelle', $babylon_type);

$creed_type = new Type('Azione','Box');
$creed = new Movie('Creed', '2020', 'Ryab Coogle', $creed_type);

$avengers_type = new Type('Azione', 'Supereroi');
$avengers = new Movie('Avengers: Endgame', '2019', 'Anthony e Joe Russo', $avengers_type);

$inception_type = new Type('Azione', 'Thriller');
$inception = new Movie('Inception', '2010', 'Christopher Nolan', $inception_type);

$interstellar_type = new Type('Fantascienza', 'Avventura');
$interstellar = new Movie('Interstellar', '2014', 'Christopher Nolan', $interstellar_type);

$matrix_type = new Type('Azione', 'Sci-Fi');
$matrix = new Movie('The Matrix', '1999', 'The Wachowskis', $matrix_type);

$mad_max_type = new Type('Azione', 'Apocalittico');
$mad_max = new Movie('Mad Max: Fury Road', '2015', 'George Miller', $mad_max_type);



?>