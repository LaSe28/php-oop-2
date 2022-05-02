<?php
include_once __DIR__ . '/user.php';

class LoggedUser extends User
{
  private $birth;
  private $discount;

  public function __construct($_name ,$_surname, $_birth)
  {
    parent::__construct($_name, $_surname);
    $this->birth = $_birth;
  }

  /**
   * Get the value of birth
   */ 
  public function getBirth()
  {
    return $this->birth;
  }

  /**
   * Get the value of discount
   */ 
  public function getDiscount()
  {
    return $this->discount;
  }

  /**
   * Set the value of discount
   *
   * @return  self
   */ 
  public function setDiscount($discount)
  {
    $this->discount = $discount;

    return $this;
  }
}

$prova = new LoggedUser('mattia','la selva','28/03/1996');
$prova->setDiscount(20);

var_dump($prova);