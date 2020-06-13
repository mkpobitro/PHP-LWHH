<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function testSomething() {
        $result = 2 + 3;
        $this->assertEquals( 5, $result );
    }
    public function testAnotherThing() {
        $result = 0;
        $this->assertEquals( false, $result );
    }

}
