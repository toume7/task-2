<?php
include("freez.php");
$myFreez = new freez('black', '5000', 'freez', '300');
/*$myFreez->on();
$myFreez->openDoor();
$myFreez->closeDoor();*/
var_dump($myFreez, "<br>");

include("printer.php");
$myprint = new printer('monochrome', 'black', '1000', 'printed', '25x50');
/*$myprint->on();
$myprint->connected();
$myprint->printdocument();
$myprint->off();*/
var_dump($myprint, "<br>");

include("microwave.php");
$myMicrowave = new microwave('white', '30', 'таймер,мощьность', '25x25');
/*$myMicrowave->on();
$myMicrowave->openDoor();
$myMicrowave->put_food();
$myMicrowave->closeDoor();
$myMicrowave->timer();
$myMicrowave->openDoor();
$myMicrowave->get_groceries();
$myMicrowave->closeDoor();
$myMicrowave->off();*/
var_dump($myMicrowave, "<br>");

include("flower.php");
$myFlower = new flower('red', 'sweet', 'small');
/*$myFlower->plant_a_prout();
$myFlower->water();
$myFlower->grow_up();
$myFlower->bloom();
$myFlower->doom();*/
var_dump($myFlower, "<br>");

include("vacuum_cleaner.php");
$mtVacuum = new vacuum_cleaner('green', '9000', '15', 'wet cleaning', '-');
/*$mtVacuum->on();
$mtVacuum->remove_dust();
$mtVacuum->shake_out_the_dust();
$mtVacuum->off();*/
var_dump($mtVacuum, "<br>");

include("bee.php");
$myBee = new bee('-', '-');
/*$myBee->arrive();
$myBee->grow_up();
$myBee->collection();
$myBee->care();
$myBee->doom();*/
var_dump($myBee, "<br>");

include("astronaut.php");
$asta = new astronaut('35', '-', 'male', '-');
/*$asta->get_a_specialty();
$asta->get_a_job();
$asta->prepare();
$asta->flight();
$asta->return();*/
var_dump($asta, "<br>");

include("human.php");
$human = new human('green', '-', 'male', '-', '180', '70');
/*$human->arrive();
$human->grow_up();
$human->learn();
$human->experience();
$human->create_a_family();
$human->grow_old();
$human->die();*/
var_dump($human, "<br>");

include("electric_kettle.php");
$kettle = new electric_kettle('purpure', '17', '-', '-', '-');
/*$kettle->open();
$kettle->on();
$kettle->pour_water();
$kettle->closed();
$kettle->boil();
$kettle->off();*/
var_dump($kettle, "<br>");