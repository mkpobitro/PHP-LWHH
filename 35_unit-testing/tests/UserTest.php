<?php
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {
    private $user;
    protected function setUp(): void {
        $this->user = new App\Model\User( "Bill", "Gates" );
    }
    function testGetFirstName() {
        $firstname = $this->user->getFirstName();
        $this->assertEquals( "Bill", $firstname );
    }

    function testSetFirstName() {
        $this->user->setFirstName( "Larry" );
        $firstname = $this->user->getFirstName( "Larry" );
        $this->assertEquals( "Larry", $firstname );
    }

}