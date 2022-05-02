<?php
include_once __DIR__ . '/classes/user/logged-user.php';
include_once __DIR__ . '/classes/user/credit-card.php';
include_once __DIR__ . '/classes/animal/animal.php';



$provaUser = new User('Mattia' , 'La Selva');
var_dump($provaUser);

$provaUserLog = new LoggedUser('Mattia','La Selva','28/03/1996');
$provaUserLog->setDiscount(20);

var_dump($provaUserLog);

$provaCC = new CreditCard('Mattia', 'La Selva', 7, 2022);
$provaCC->setCCNumber(450384020);
$provaCC->setCVV(802);

var_dump($provaCC);


$provaAnimal = new Animal('cane', 'dalmata');
$provaAnimal->setWeight(35);
var_dump($provaAnimal);