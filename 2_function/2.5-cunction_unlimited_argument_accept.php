<?php
//২.৫ - ফাংশনে আনলিমিটেড আর্গুমেন্ট অ্যাক্সেপ্ট করা

    function sum($x, $y, int ...$numbers):int{

        $result = 0;
        for($i = 0; $i < count($numbers); $i++){
            $result += $numbers[$i];
        }
        return $result;
    }
    echo sum(5,3,2,11,9); //output = 22
