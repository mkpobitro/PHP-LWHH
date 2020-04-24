<?php
class MyException extends Exception {}
class MyNetworkException extends Exception {}

function testExceptions() {
    throw new MyNetworkException();
}

try {
    testExceptions();
} catch ( MyException $e ) {
    echo "MyException Caught";
} catch ( MyNetworkException $e ) {
    echo "MyNetworkException Caught";
} catch ( Exception $e ) {
    echo "Exception Caught";
} finally {
    echo "\nCleaned Up";
}