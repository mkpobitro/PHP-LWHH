<?php
require "vendor/autoload.php";

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);


echo Uuid::fromDateTime(new DateTime());