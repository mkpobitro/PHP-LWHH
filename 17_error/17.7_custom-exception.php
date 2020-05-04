<?php 
$person = [
    'name'  => 'xyz',
    'id'    => 'some_id',
    'age'   => '22',
    'sex'   => 'M',
];
function processMaternityLeave($person){
    if($person['age']<20){
        throw new Exception("Too Young");
    }elseif('F' == $person['sex']){
        echo "Processed";
    }else{
        throw new GenderMismatchException($person);
    }
}

class GenderMismatchException extends Exception{
    private $person;
    function __construct($person){
        $this->person = $person;
        // parent::__construct("Gender Mismatch\n");
        echo ("Genderrr Mismatch\n");
    }
    function getDetailedMessage(){
        echo "Gender Mismatch for Person with ID {$this->person['id']}\n";
    }
}

try{
    processMaternityLeave($person);
}catch(GenderMismatchException $e){
    echo $e->getMessage();
    echo $e->getDetailedMessage();
}catch(Exception $e){
    echo $e->getMessage();
}
