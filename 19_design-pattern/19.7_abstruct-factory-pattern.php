<?php

class Car{
    function getName(){
        return "Car";
    }
}

class Truck{
    function getName(){
        return "Truck";
    }
}

abstract class VFactory{
    abstract function create();
}

class CarFactory extends VFactory{
    function create(){
        return new Car();
    }
}


class TruckFactory extends VFactory{
    function create(){
        return new Truck();
    }
}


class VehicleFactory{
    function getFactory($type = 'car'){
        if('car' == $type){
            return new CarFactory();
        }elseif('truck' == $type){
            return new TruckFactory();
        }
    }
}


$vf = new VehicleFactory();
$tf = $vf->getFactory('truck');
$truck = $tf->create();
echo $truck->getName();

echo PHP_EOL;

$cf = $vf->getFactory('car');
$car = $cf->create();
echo $car->getName();