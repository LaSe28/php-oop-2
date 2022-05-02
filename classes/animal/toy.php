<?php

include_once __DIR__ . '/product.php';
class Toy extends Product
{
  private $type;

  public function __construct($_type, $brand, $price)
  {
    parent::__construct($brand, $price);
    $this->type = $_type;
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
}
