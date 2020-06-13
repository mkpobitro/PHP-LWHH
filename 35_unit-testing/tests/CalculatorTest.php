<?php
use PHPUnit\Framework\TestCase;

// require "src/Calculator.php";

class CalculatorTest extends TestCase {
    private $calc;
    protected function setUp(): void {
        $this->calc = new App\Calculator();
    }

    function test_addition_of_two_numbers() {
        $result = $this->calc->add( 4, 5 );
        $this->assertEquals( 9, $result );
    }

    function test_addition_of_multiple_numbers() {
        $result = $this->calc->add( 4, 5, 1, 4, 5 );
        $this->assertEquals( 19, $result );
    }

    function test_subtraction_of_two_numbers() {
        $result = $this->calc->subtract( 6, 4 );
        $this->assertEquals( 2, $result );
    }
    function test_division_of_two_numbers() {
        $result = $this->calc->divide( 10, 2 );
        $this->assertEquals( 5, $result );
    }

    function dataProvider_for_multiplication() {
        return [
            [7, 3, 21],
            [20, 3, 60],
            [11, 9, 99],
        ];
    }
    /** @dataProvider dataProvider_for_multiplication */
    function test_multiplication_of_two_numbers_using_dataProvider( $a, $b, $expected ) {
        $result = $this->calc->multiply( $a, $b );
        $this->assertEquals( $expected, $result );
    }
}
