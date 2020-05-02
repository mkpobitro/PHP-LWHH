<?php

interface Vehicle {
    // function hasTwoTires();
    // function hasFourTires();
    // function hasSixTires();
    // function isDieselCompatible();
    // function isPetrolCompatible();
    // function getMileage();

    function getMilage();
    function getName();
    function getPrice();
}

interface TwoWheelers {

}
interface FourWheelers {

}
interface SixWheelers {

}

class MotorCycle implements Vehicle, TwoWheelers {

}
class Bus implements Vehicle, SixWheelers {

}