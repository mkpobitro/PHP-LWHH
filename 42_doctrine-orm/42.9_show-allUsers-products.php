<?php

use Shop\Model\User;

require "bootstrap.php";
$usersRepo = $entityManager->getRepository( User::class );
$users = $usersRepo->find();
foreach ( $users as $user ) {
    echo "User Name: " . $user->getName() . PHP_EOL;
    foreach ( $user->getProducts() as $product ) {
        echo sprintf( "-%s\n", $product->getName() );
    }
    echo "===================\n\n";
}