<?php
// create_product.php <name>

use Shop\Model\Product;

require_once "bootstrap.php";

$newProductName = 'Mouse';

$product = new Product();
$product->setName( $newProductName );

$entityManager->persist( $product );
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";