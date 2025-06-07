<?php 

class Cart 
{
  public function add(Product $product)
  {
      $inCart = false;
      if(count($this->getCart()['products']) > 0){
        foreach ($this->getCart()['products'] as $productInCart){
          if($productInCart->getId() === $product->getId()) {
            $quantity = $productInCart->getQuantity() + $product->getQuantity();
            $productInCart->setQuantity($quantity);
            $inCart = true;
            break;
          }
        }  
     }

     if(!$inCart) {
        var_dump('not in cart');
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

