<?php

class Planet {
    static function echoName() {
        echo self::getName();
        echo static::getName();
    }
    static function getName() {
        return "Planet\n";
    }
}

class Earth extends planet {
    static function getName() {
        echo "Earth\n";
    }
}

Planet::echoName();

echo PHP_EOL;

Earth::echoName();