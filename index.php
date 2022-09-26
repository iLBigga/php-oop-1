<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $lenguage;
    public $runTime;
    public $type = 'Movie';

    function __construct($title, $director, $year, $lenguage, $runTime) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->lenguage = $lenguage;
        $this->runTime = $runTime;
        $this->setType($runTime);
    }

    public function setType($runTime) {
        if($runTime <= 30 ) {
            $this->type = 'Short';
        }
    }
}

$interstellar = new Movie('Interstellar', 'Christopher Nolan', '2014', 'English', 149);

$TinToy = new Movie('Tin Toy', 'John Lasseter', '1988', 'English', 5);

var_dump($interstellar, $TinToy);