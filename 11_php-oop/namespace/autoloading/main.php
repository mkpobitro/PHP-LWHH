<?php
namespace CloudStorage;
include "autoloader.php";

use CloudStorage\Filesystem\Files\images\Jpeg;
use CloudStorage\Filesystem\Scanner;
use \CloudStorage\Mail\Mailer;

class Main {
    function __construct() {
        // $mailer = new Mail\Mailer();
        $mailer = new Mailer();
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        $jpeg = new Jpeg;
        echo $jpeg->getDimension();

    }
}

new Main();