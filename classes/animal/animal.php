<?php 
class Animal 
{
  private $family;
  private $race;
  private $weight;

  public function __construct( $_family, $_race )
  {
    $this->family = $_family;
    $this->race = $_race;
  }

  /**
   * Get the value of family
   */ 
  public function getFamily()
  {
    return $this->family;
  }

  /**
   * Get the value of race
   */ 
  public function getRace()
  {
    return $this->race;
  }

  /**
   * Get the value of weight
   */ 
  public function getWeight()
  {
    return $this->weight;
  }

  /**
   * Set the value of weight
   *
   * @return  self
   */ 
  public function setWeight($weight)
  {
    $this->weight = $weight;

    return $this;
  }
}

