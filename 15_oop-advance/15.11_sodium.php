<?php

class Sodium {
    static function addForm( $id ): Sodium {}
    function addColumn( $columnSize ): Sodium {}
    function addFields( FieldInterface...$fields ): Sodium {}
}

class FieldFactory {
    static function createTextField(): FieldInterface {}
    static function createRadio(): FieldInterface {}
}
class TextField extends AbstractField {

}
class Radio extends AbstractField {

}

//3rd party developer
class GoogleMap extends AbstractField{
    
}

class AbstractField implements FieldInterface {
    static function create($id): FieldInterface {}
    function setId(): FieldInterface {}
    function setLabel(): FieldInterface {}
    function setDefault(): FieldInterface {}
    function setValue(): FieldInterface {}
}

interface FieldInterface {
    static function create($id): FieldInterface;
    function setId(): FieldInterface;
    function setLabel(): FieldInterface;
    function setDefault(): FieldInterface;
    function setValue(): FieldInterface;
}
// Sodium::addForm( "myform" )->addColumn( 70 )->addFields(
//     [
//         FieldFactory::createTextField()->setId(),
//         FieldFactory::createRadio()->setLabel()->
//     ]
// );

Sodium::addForm( "myform" )->addColumn( 70 )->addFields(
    FieldFactory::createTextField()->setId(),
    FieldFactory::createRadio()->setLabel()
);


Sodium::addForm('form')->addFields(
    TextField::create('id')->setValue()->setLabel(),
    GoogleMap::create('mapid')->setLabel()->setDefault()
)