<?php
require_once 'Product.php';

class Cart {
  private array $products;

  public function __construct() {
    $this->products = [];
  }

  public function allProducts($products): void
  {
    foreach ($products as $product) {
      echo $product."\n";
    }
  }
  public function addProductInCart(Product $product): void
  {
    foreach ($this->products as $cartProduct) {
      if ($cartProduct->getName() === $product->getName()) {
        $cartProduct->setQuantity($cartProduct->getQuantity() + 1);
        $product->decreaseQuantity();
        return;
      }
    }
    if ($product->getQuantity() > 0) {
      $newProduct = new Product($product->getName(), $product->getPrice(), 1);
      $this->products[] = $newProduct;
      $product->decreaseQuantity();
    }
  }

  public function removeProductInCart(Product $product): void
  {
    foreach ($this->products as $key => $cartProduct) {
      if ($cartProduct->getName() === $product->getName()) {
        $product->setQuantity($product->getQuantity() + $cartProduct->getQuantity());
        unset($this->products[$key]);
        break;
      }
    }
  }

  public function getTotal(): float|int
  {
    $total = 0;
    foreach ($this->products as $product) {
      $total += $product->getPrice() * $product->getQuantity();
    }
    return $total;
  }

  public function __toString() {
    $productList = "Koszyk \n";
    foreach ($this->products as $product) {
      $productList .= $product . "\n";
    }
    $productList .= "Cena: " . $this->getTotal();
    return $productList;
  }
}
