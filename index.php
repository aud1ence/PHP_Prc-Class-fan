<?php
include_once "Fan.php";

$fan = new Fan();

$fan->setSpeed(Fan::FAST);
$fan->setRadius(10);
$fan->setColor("yellow");
$fan->setOn(true);
echo $fan->toString();
echo "<br>";
$fan2 = new Fan();
$fan->setSpeed(Fan::MEDIUM);
$fan->setRadius(5);
$fan->setColor("blue");
$fan->setOn(false);
echo $fan2->toString();
