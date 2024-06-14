<?php
require_once 'Product.php';
require_once 'Cart.php';

$product1 = new Product("Laptop", 1500, 12);
$product2 = new Product("Mouse", 50, 200);
$product3 = new Product("Keyboard", 100, 10);
$product4 = new Product("Monitor", 1000, 15);

$products = [$product1,$product2,$product3,$product4];

$cart = new Cart();

$cart->allProducts($products);

$cart->addProductInCart($product1);
$cart->addProductInCart($product2);


$cart->addProductInCart($product1);

echo "\n";
echo "Koszyk po dodaniu produktu:";
echo $cart;
echo "\n";

$cart->removeProductInCart($product2);

echo "\n";
echo "Koszyk po usunięciu produktu:";
echo $cart;
echo "\n";
?>

