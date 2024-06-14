<?php
class Product {
  private $name;
  private $price;
  private $quantity;

  public function __construct($name, $price, $quantity) {
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getQuantity() {
    return $this->quantity;
  }

  public function setQuantity($quantity): void
  {
    $this->quantity = $quantity;
  }
  public function decreaseQuantity($n = 1): void
  {
    if ($this->quantity >= $n) {
      $this->quantity -= $n;
    }
  }

  public function __toString() {
    return "Product: {$this->name}, Price: {$this->price}, Quantity: {$this->quantity}";
  }
}
