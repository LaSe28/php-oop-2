<?php
include_once __DIR__ . '/classes/user/logged-user.php';
include_once __DIR__ . '/classes/user/credit-card.php';
include_once __DIR__ . '/classes/animal/animal.php';
include_once __DIR__ . '/classes/animal/product.php';
include_once __DIR__ . '/classes/animal/food.php';
include_once __DIR__ . '/classes/animal/toy.php';
include_once __DIR__ . '/classes/animal/utility.php';
include_once __DIR__ . '/classes/animal/bed.php';



$provaUser = new User('Mattia' , 'La Selva');
var_dump($provaUser);

$provaUserLog = new LoggedUser('Mattia','La Selva','28/03/1996', '949902');

var_dump($provaUserLog);

$provaCC = new CreditCard('Mattia', 'La Selva', 7, 2022);
$provaCC->setCCNumber(450384020);
$provaCC->setCVV(802);

var_dump($provaCC);


$provaAnimal = new Animal('cane', 'dalmata');
$provaAnimal->setWeight(35);
var_dump($provaAnimal);

$provaUti = new Utility('antipulci','non so', '3');
var_dump($provaUti);

$provaBed = new Bed('non so','30');
$provaBed->setDepth(52);
$provaBed->setWidth(90);
$provaBed->setHeight(15);

var_dump($provaBed);