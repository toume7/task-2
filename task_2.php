<?php
include("freez.php");
echo ('<br>Холодильник:<br>');
$myFreez = new freez('black', '5000', 'freez', '300');
/*$myFreez->on();
$myFreez->openDoor();
$myFreez->closeDoor();*/
echo ('цвет холодильника-'.$myFreez->getColor().'<br>');
echo ('цена холодильника-'.$myFreez->getPrice().'<br>');
echo ('функционал-'.$myFreez->getFunctional().'<br>');
echo ('вместимость холодильника-'.$myFreez->getCapacit().'<br>');

include("printer.php");
echo ('<br>Принтер:<br>');
$myprint = new printer('monochrome', 'black', '1000', 'printed', '25x50');
/*$myprint->on();
$myprint->connected();
$myprint->printdocument();
$myprint->off();*/
echo ('тип принтера-'.$myprint->getType() .'<br>');
echo ('цвет принтера-'.$myprint->getColor() .'<br>');
echo ('цена принтера-'.$myprint->getPrice() .'<br>');
echo ('функционал-'.$myprint->getFunctional() .'<br>');
echo ('размер принтера-'.$myprint->getSize() .'<br>');

include("microwave.php");
echo ('<br>Микроволновка:<br>');
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
echo ('цвет микроволновки-'.$myMicrowave->getColor() .'<br>');
echo ('вместимость микроволновки-'.$myMicrowave->getCapacit().'<br>');
echo ('функционал-'.$myMicrowave->getFunctional() .'<br>');
echo ('размер микроволновки-'.$myMicrowave->getSize() .'<br>');

include("flower.php");
echo ('<br>цветочек:<br>');
$myFlower = new flower('red', 'sweet', 'small');
/*$myFlower->plant_a_prout();
$myFlower->water();
$myFlower->grow_up();
$myFlower->bloom();
$myFlower->doom();*/
echo ('цвет цветка-'.$myFlower->getColor() .'<br>');
echo ('размер цветка-'.$myFlower->getSize() .'<br>');
echo ('запах цветка-'.$myFlower->getScent() .'<br>');


include("vacuum_cleaner.php");
echo ('<br>пылесос:<br>');
$mtVacuum = new vacuum_cleaner('green', '9000', '15', 'wet cleaning', '-');
/*$mtVacuum->on();
$mtVacuum->remove_dust();
$mtVacuum->shake_out_the_dust();
$mtVacuum->off();*/
echo ('цвет пылесоса-'.$mtVacuum->getColor() .'<br>');
echo ('цена пылесоса-'.$mtVacuum->getPrice() .'<br>');
echo ('вместимость пылесоса-'.$mtVacuum->getCapacit().'<br>');
echo ('функционал-'.$mtVacuum->getFunctional() .'<br>');
echo ('форма- '.$mtVacuum->getForm() .'<br>');

include("bee.php");
echo ('<br>Пчела:<br>');
$myBee = new bee('-', '-');
/*$myBee->arrive();
$myBee->grow_up();
$myBee->collection();
$myBee->care();
$myBee->doom();*/
echo ('Иерархия- '.$myBee->getHierarchy() .'<br>');
echo ('разновидность- '.$myBee->getVarieties() .'<br>');

include("astronaut.php");
echo ('<br>космонавт:<br>');
$asta = new astronaut('35', '-', 'male', '-');
/*$asta->get_a_specialty();
$asta->get_a_job();
$asta->prepare();
$asta->flight();
$asta->return();*/
echo ('возраст-'.$asta->getAge() .'<br>');
echo ('телосложение- '.$asta->getBodyType() .'<br>');
echo ('пол-'.$asta->getGender() .'<br>');
echo ('национальность- '.$asta->getNationality() .'<br>');

include("human.php");
echo ('<br>человек:<br>');
$human = new human('green', '-', 'male', '-', '180', '70');
/*$human->arrive();
$human->grow_up();
$human->learn();
$human->experience();
$human->create_a_family();
$human->grow_old();
$human->die();*/
echo ('цвет глаз-'.$human->getEyeColor() .'<br>');
echo ('телосложение- '.$human->getBodyType() .'<br>');
echo ('пол- '.$human->getGender() .'<br>');
echo ('национальность- '.$human->getNationality() .'<br>');
echo ('рост- '.$human->getHeight() .'<br>');
echo ('вес- '.$human->getWeight() .'<br>');


include("electric_kettle.php");
echo ('<br>Электрический чайник:<br>');
$kettle = new electric_kettle('purpure', '17', '-', '-', '-');
/*$kettle->open();
$kettle->on();
$kettle->pour_water();
$kettle->closed();
$kettle->boil();
$kettle->off();*/
echo ('цвет чайника-'.$kettle->getColor() .'<br>');
echo ('вместимость чайника-'.$kettle->getCapacit().'<br>');
echo ('функционал-'.$kettle->getFunctional() .'<br>');
echo ('форма- '.$kettle->getForm() .'<br>');
echo ('тип чайника-'.$kettle->getType() .'<br>');