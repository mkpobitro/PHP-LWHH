<?php
// list_products.php

use Shop\Model\Product;

require_once "bootstrap.php";

$productRepository = $entityManager->getRepository( Product::class );
$products = $productRepository->findAll();

foreach ( $products as $product ) {
    echo sprintf( "-%s id:%d\n",
        $product->getName(),
        $product->getId() );
}