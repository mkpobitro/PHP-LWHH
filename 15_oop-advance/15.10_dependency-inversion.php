<?php
//dependency inversion principle
class Authenticator {
    function authenticate( $username, $password, $external = false, $externalService = false ) {
        if ( $external == true && 'Google' == $externalService ) {
            $ga = new GoogleAuthenticator();
            $ga->authenticate();
        } elseif ( $extrernal = true && 'github' == $externalService ) {
            $gia = new GoogleAuthenticator();
            $gia->authenticate();
        } else {
            $la = new LocalAuthenticator();
            $la->authenticate();
        }
    }
}

// উপরের মত না করে নিচের পদ্ধতি ফলো করতে হবে।
interface AuthServiceProviderInterface {
    function authenticate();
}

class GithubAuthenticator implements AuthServiceProviderInterface {
    function authenticate() {

    }
}
class LocalAuthenticator implements AuthServiceProviderInterface {
    function authenticate() {

    }
}

class Authenticator {
    private $authServiceProvider;
    function __construct( AuthServiceProviderInterface $asp ) {
        $this->authServiceProvider = $asp;
    }
    function authenticate() {
        $this->$asp->authenticate();
    }
}

$gia = new GithubAuthenticator();
$auth = new Authenticator( $gia );
$auth->authenticate();

$la = new LocalAuthenticator( $username, $password );
$auth = new Authenticator( $la );
$auth->authenticate();