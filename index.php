<?php

class Movie{
    private $title;
    private $year;
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

    public function setYear($_year) {
        $this->year = $_year;
    }

    public function getYear() {
        return 'Questo film è uscito nel ' . $this->year;
    }
}

$backToTheFuture = new Movie('Back to the Future');
$backToTheFuture->setYear(1985);
$backToTheFuture->setRunningTime('116 minutes');
// var_dump($backToTheFuture);

$backToTheFuture2 = new Movie('Back to the Future - 2');
$backToTheFuture2->setYear(1989);
$backToTheFuture2->setRunningTime('108 minutes');
// var_dump($backToTheFuture2);

$backToTheFuture3 = new Movie("Back to the Future - 3");
$backToTheFuture3->setYear(1990);
$backToTheFuture3->setRunningTime('108 minutes');
// var_dump($backToTheFuture3);

?>

<p>
    <?= $backToTheFuture3->getRunningTime() ?>
</p>

<p>
    <?= $backToTheFuture3->getYear() ?>
</p>