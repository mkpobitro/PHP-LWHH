<?php
class Person{
    public $firstname;
    public $lastname;
}

$p = new Person();
$p->firstname = "John";
$p->lastname = "Doe";

echo json_encode($p, JSON_PRETTY_PRINT);