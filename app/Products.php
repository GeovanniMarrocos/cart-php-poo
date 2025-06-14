<?php 

class Products 
{
  //PROPERTIES
  private int $id;
  private string $name;
  private int $price;
  private int $quantity;

  //SET
  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function setName(string $name)
  {
    $this->name = $name;
  }

  public function setPrice(int $price)
  {
    $this->price = $price;
  }

  public function setQuantity(int $quantity)
  {
    $this->quantity = $quantity;
  }

  //GET
  public function getId():int
  {
    return $this->id;
  }

  public function getName():string
  {
    return $this->name;
  }

  public function getPrice():int
  {
    return $this->price;
  }

  public function getQuantity():int
  {
    return $this->quantity;
  }

}