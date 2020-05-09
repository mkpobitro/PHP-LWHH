<?php
//strategy patter

interface PasswordHashInterface{
    function hash($data);
}

class MD5HashEngine implements PasswordHashInterface{
    function hash($data){
        return md5($data);
    }
}

class SHA1Engine implements PasswordHashInterface{
    function hash($data){
        return sha1($data);
    }
}

class NativeHashEngine implements PasswordHashInterface{
    function hash($data){
        return password_hash($data, PASSWORD_BCRYPT);
    }
}

class PasswordHasher{
    private $hashingEngine;
    function __construct(PasswordHashInterface $hashingEngine){
        $this->hashingEngine = $hashingEngine;   
    }

    function getHash($data){
        return $this->hashingEngine->hash($data);
    }

    function setHashEngine(PasswordHashInterface $hashingEngine){
        $this->hashingEngine = $hashingEngine;
    }
}

$md5he = new MD5HashEngine();
$sha1he = new SHA1Engine();
$nhe = new NativeHashEngine();

$password = "SomePassword";
$ph = new PasswordHasher($md5he);
$ph2 = new PasswordHasher($sha1he);
$ph3 = new PasswordHasher($nhe);

echo "MD5: ". $ph->getHash($password);

echo PHP_EOL;

// $ph2->setHashEngine($sha1he);
echo "Sha1: ". $ph2->getHash($password);

echo PHP_EOL;
echo "Native Hash: ". $ph3->getHash($password);