<?php
Class MotorCycle {
    // private $displacement, $capacity, $mileage;
    private $parameters;
    function __construct( $displacement, $capacity, $mileage ) {
        $this->parameters                 = [];
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity']     = $capacity;
        $this->parameters['mileage']      = $mileage;
    }
    // function getDisplacement() {
    //     return $this->parameters['displacement'];
    // }

    // function setDisplacement( $displacement ) {
    //     return $this->parameters['displacement'] = $displacement;
    // }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "{$name} not found\n";
            return false;
        }
        return true;
    }

    function __unset( $name ) {
        print_r( $this->parameters );
        unset( $this->parameters[$name] );
        print_r( $this->parameters );
    }

    //property overloading
    function __get( $name ) {
        echo $this->parameters[$name];
    }
    function __set( $name, $value ) {
        echo $this->parameters[$name] = $value;
    }

    function __call( $name, $arguments ) {
        if ( 'run' == $name ) {
            if ( $arguments ) {
                echo "I am running at {$arguments[0]}";
            } else {
                echo "I am running";
            }
        }
    }

    static function __callStatic( $name, $arguments ) {
        echo "Static Call\n";
    }

}

$pulsar = new MotorCycle( '150cc', '16ltr', '45kmpl' );
// echo $pulsar->getDisplacement();

// $pulsar->displacement = '135cc';

if ( isset( $pulsar->tiresize ) ) {
    echo $pulsar->tiresize;
}

unset( $pulsar->mileage );

$pulsar->run( "111kph\n" );

MotorCycle::hello();