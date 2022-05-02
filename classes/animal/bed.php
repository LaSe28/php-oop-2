<?php

include_once __DIR__ . '/product.php';
class Bed extends Product
{
  private $depth;
  private $width;
  private $height;

  public function __construct($brand, $price)
  {
    parent::__construct($brand, $price);
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
   * Get the value of depth
   */ 
  public function getDepth()
  {
    return $this->depth;
  }

  /**
   * Set the value of depth
   *
   * @return  self
   */ 
  public function setDepth($depth)
  {
    $this->depth = $depth;

    return $this;
  }

  /**
   * Get the value of width
   */ 
  public function getWidth()
  {
    return $this->width;
  }

  /**
   * Set the value of width
   *
   * @return  self
   */ 
  public function setWidth($width)
  {
    $this->width = $width;

    return $this;
  }

  /**
   * Get the value of height
   */ 
  public function getHeight()
  {
    return $this->height;
  }

  /**
   * Set the value of height
   *
   * @return  self
   */ 
  public function setHeight($height)
  {
    $this->height = $height;

    return $this;
  }
}
