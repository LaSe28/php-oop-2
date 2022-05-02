<?php
include_once __DIR__ . '/user.php';

class LoggedUser extends User
{
  private $birth;
  private $discount = 20;
  private $creditCard;

  public function __construct($_name ,$_surname, $_birth, $_creditCard)
  {
    parent::__construct($_name, $_surname);
    $this->birth = $_birth;
    $this->creditCard = $_creditCard;

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
}

