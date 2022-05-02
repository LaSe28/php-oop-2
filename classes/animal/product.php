<?php
class Product
  {
  private $brand;
  private $price;

  public function __construct($_brand, $_price)
  {
    $this->brand = $_brand;
    $this->price = $_price;
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