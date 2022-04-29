<?php

class Movie{
    public $title;
    public $year;
    public $runningTime;

    public function setTitle($_title) {
        $this->title = $_title;
    }
}

$backToTheFuture = new Movie();
$backToTheFuture->setTitle('Back to the Future');
$backToTheFuture->year = 1985;
$backToTheFuture->runningTime = '116 minutes';
var_dump($backToTheFuture);

$backToTheFuture2 = new Movie();
$backToTheFuture2->setTitle('Back to the Future - 2');
$backToTheFuture2->year = 1989;
$backToTheFuture2->runningTime = '108 minutes';
var_dump($backToTheFuture2);