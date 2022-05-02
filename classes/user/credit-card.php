<?php
include_once __DIR__ . '/user.php';

class CreditCard extends User
{
  private $CCNumber;
  private $CVV;
  private $ExpirationDate;
  private $ExpirationMonth;
  private $ExpirationYear;
  
  public function __construct($_name ,$_surname, $_ExpirationMonth, $_ExpirationYear)
  {
    parent::__construct($_name, $_surname);
    if ($_ExpirationYear < date("Y") || $_ExpirationMonth < date("m")){
      $this->ExpirationDate = 'La tua carta è scaduta. Prova con un\'altra carta.';
    } else {
      $this->ExpirationDate = $_ExpirationMonth . '/' . $_ExpirationYear;
    }

  }
  
  /**
   * Get the value of CCNumber
   */ 
  public function getCCNumber()
  {
    return $this->CCNumber;
  }

  /**
   * Set the value of CCNumber
   *
   * @return  self
   */ 
  public function setCCNumber($CCNumber)
  {
    $this->CCNumber = $CCNumber;

    return $this;
  }

  /**
   * Get the value of CVV
   */ 
  public function getCVV()
  {
    return $this->CVV;
  }

  /**
   * Set the value of CVV
   *
   * @return  self
   */ 
  public function setCVV($CVV)
  {
    $this->CVV = $CVV;

    return $this;
  }

}

