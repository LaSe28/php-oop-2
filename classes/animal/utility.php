<?php

include_once __DIR__ . '/product.php';
class Utility extends Product
{
  private $type;
  private $availability;
  public function __construct($_type, $brand, $price)
  {
    parent::__construct($brand, $price);
    if ($_type == 'antipulci' && date('m') < 6 || date('m') > 8){
      $this->availability = 'il prodotto non è disponibile';
      $this->type = $_type;
    } else {
      $this->availability = 'ecco i risultati';
      $this->type = $_type;
    }
  }


  /**
   * Get the value of type
   */ 
  public function getType()
  {
    return $this->type;
  }

  /**
   * Get the value of brand
   */ 
  public function getBrand()
  {
    return $this->brand;
  }


  /**
   * Get the value of price
   */ 
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Get the value of availability
   */ 
  public function getAvailability()
  {
    return $this->availability;
  }
}

