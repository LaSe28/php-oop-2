<?php
include_once __DIR__ . '/user.php';

class LoggedUser extends User
{
  private $birth;

  public function __construct($_name ,$_surname, $_birth)
  {
    parent::__construct($_name, $_surname);
    $this->birth = $_birth;
  }
}

$prova = new LoggedUser('mattia','la selva','28/03/1996');

var_dump($prova);