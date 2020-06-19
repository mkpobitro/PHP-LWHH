<?php
    // create_product.php <name>

    use Shop\Model\Product;
    use Shop\Model\User;

    require_once "bootstrap.php";

    $user = $entityManager->find( User::class, 2 );
    $newProductName = 'Motherboard';

    $product = new Product();
    $product->setName( $newProductName );
    $product->setUser( $user );

    $entityManager->persist( $product );
    $entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";