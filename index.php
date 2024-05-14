<?php

class Movie {
    public $title;
    public $years;
    public $moviedirector;
    public $type;

    public function __construct($_title, $_years, $_moviedirector,$_type) {
        $this->title = $_title;
        $this->years = $_years;
        $this->moviedirector = $_moviedirector;
        $this->type = $_type;
    }

    public function getFullName() {
        return $this->title . ' ' . $this->years;
    }
}

class Type {
    public $type1;
    // public $type2;
    // public $type3;
    // public $type4;

    public function __construct($_type1) {
        $this->type1 = $_type1;
        // $this->type2 = $_type2;
        // $this->type3 = $_type3;
        // $this->type4 = $_type4;
    }
    // public function getFullType() {
    //     return $this->type1 . ' ' . $this->type2;
    // }
}

$babylon_type = new Type ('Drammatico');
$babylon = new Movie('Babylon','2023','Damien Chazelle', $babylon_type);

$creed = new Movie('Creed', '2020','Ryab Coogle','Azione');

var_dump($babylon_type,$babylon,$creed)
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
<?php echo $babylon-> getFullName(); ?> <br>
<?php echo $creed->getFullName(); ?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>