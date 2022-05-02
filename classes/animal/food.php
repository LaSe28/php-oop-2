<?php
include_once __DIR__ . '/classes/animal/animal.php';

class Food extends Animal
{
  private $brand;
  private $type;
  private $price;

  public function __construct($_type)
  {
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
   * Set the value of brand
   *
   * @return  self
   */ 
  public function setBrand($brand)
  {
    $this->brand = $brand;

    return $this;
  }

  /**
   * Get the value of price
   */ 
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */ 
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }
}

$provaFood = new Food('crocchette');
