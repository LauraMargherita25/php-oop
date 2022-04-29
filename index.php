<?php

class Movie{
    public $title;
    public $year;
    public $runningTime;

    public function __construct($_title, $_year) {
        $this->title = $_title;
        $this->year = $_year;
    }

    public function setRunningTime($_runningTime) {
        $this->runningTime = $_runningTime;
    }
}

// $backToTheFuture = new Movie();
// $backToTheFuture->title = 'Back to the Future';
// $backToTheFuture->year = 1985;
// $backToTheFuture->setRunningTime('116 minutes');
// var_dump($backToTheFuture);

// $backToTheFuture2 = new Movie();
// $backToTheFuture2->title = 'Back to the Future - 2';
// $backToTheFuture2->year = 1989;
// $backToTheFuture2->setRunningTime('108 minutes');
// var_dump($backToTheFuture2);

$backToTheFuture3 = new Movie("Back to the Future - 3", 1990);
echo $backToTheFuture3->title;
echo $backToTheFuture3->year;