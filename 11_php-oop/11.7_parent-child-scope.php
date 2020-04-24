<?php
//Parent class এবং child class এ যদি সিমিলার মেথড থাকে তাহলে অবশ্যই child class আগে রান করবে।

Class Sports {
    function __construct() {
        $this->sayHi();
    }

    function sayHi() {
        echo "Hello Sports\n";
    }
}

Class Cricket extends Sports {
    function sayHi() {
        parent::sayHi();
        echo "Hello Cricket";
    }
}

$cricket = new Cricket();