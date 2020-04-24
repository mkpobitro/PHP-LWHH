<?php
namespace Astronomy;

include "namespace/planet.php";
include "namespace/earth.php";
$planet = new Planets\Earth();
// $planet = new Planets\Planet(); // unqualified
// $planet = new \Astronomy\Planets\Planet(); // qualified
$planet->getName();

// new \DateTime();