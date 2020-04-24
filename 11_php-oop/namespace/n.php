<?php
namespace Project;
include "c1.php";
include "c2.php";

use Project\Bike as Pulsar; //alias
use Project\Motorcycle\Bike as Hornet; //alias

$b = new Bike();
echo $b->getName();

echo PHP_EOL;

$h = new Hornet();
echo $h->getName();

echo PHP_EOL;

$p = new Pulsar;
echo $p->getName();