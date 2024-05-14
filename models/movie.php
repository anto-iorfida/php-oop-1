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


?>