<?php

namespace CloudStorage\Filesystem\Files\images;

use CloudStorage\Filesystem\Files\Contracts\ImageContract;
use CloudStorage\Mail\Mailer;

class Jpeg implements ImageContract {
    function getDimension() {
        ( new Mailer() )->sendMail();
        return "200*200";
    }
}