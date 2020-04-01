<?php

// ২.৩ - ফাংশন প্যারামিটারের ডিফল্ট ভ্যালু বা অপশনাল প্যারামিটার
    function serve($foodType="Tea", $numberOfItems="2 cups"){
        echo "{$numberOfItems} of {$foodType} have been served";
    }
    $ft = "Coffe";
    $ni = "4 cups";
    serve($ft, $ni); //4 cups of Coffe have been served


