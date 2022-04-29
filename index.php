<?php

class Movie{
    private $title;
    public $year;
    private $runningTime;

    public function __construct($_title) {
        $this->title = $_title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setRunningTime($_runningTime) {
        $this->runningTime = $_runningTime;
    }

    public function getRunningTime() {
        return 'il film dura: ' . $this->runningTime;
    }
}

$backToTheFuture = new Movie('Back to the Future');
$backToTheFuture->year = 1985;
$backToTheFuture->getRunningTime('116 minutes');
var_dump($backToTheFuture);

$backToTheFuture2 = new Movie('Back to the Future - 2');
$backToTheFuture2->year = 1989;
$backToTheFuture2->setRunningTime('108 minutes');
var_dump($backToTheFuture2);

$backToTheFuture3 = new Movie("Back to the Future - 3");
$backToTheFuture3->year = 1990;
$backToTheFuture3->setRunningTime('108 minutes');
// echo $backToTheFuture3->title;
echo $backToTheFuture3->year;
var_dump($backToTheFuture3);

?>

<p>
    <?= $backToTheFuture3->getRunningTime() ?>
</p>