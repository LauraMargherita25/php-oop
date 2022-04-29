<?php

class Movie{
    public $title;
    public $year;
    public $runningTime;
}

$backToTheFuture = new Movie();
$backToTheFuture->title = 'Back to the Future';
$backToTheFuture->year = 1985;
$backToTheFuture->runningTime = '116 minutes';
var_dump($backToTheFuture);

$backToTheFuture2 = new Movie();
$backToTheFuture2->title = 'Back to the Future - 2';
$backToTheFuture2->year = 1989;
$backToTheFuture2->runningTime = '108 minutes';
var_dump($backToTheFuture2);