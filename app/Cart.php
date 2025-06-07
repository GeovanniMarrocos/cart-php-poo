<?php 

class Cart 
{
  public function add(Product $product)
  {
      if(count($this->getCart()['products']) > 0)
      {

      }
  } 

  public function remove()
  {

  }

  public function getCart():string
  {
    return $_SESSION['cart'] ?? [];
  }
}

