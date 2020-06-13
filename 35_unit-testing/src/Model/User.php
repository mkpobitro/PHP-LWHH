<?php
namespace App\Model;
class User {
    private $fname, $lname;
    function __construct( $fname, $lname ) {
        $this->fname = $fname;
        $this->lname = $lname;
    }

    public function getFirstName() {
        return $this->fname;
    }
    public function setFirstName( $fname ) {
        $this->fname = $fname;
        return $this->fname;
    }
}

//TDD - Test Driven Development
//Test First
