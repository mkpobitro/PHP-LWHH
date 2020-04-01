<?php
//২.৪ - ফাংশনের রিটার্ন টাইপ ফিক্স করে দেয়া

    function sum(int $x, int $y, int $z):int{
        return $x+$y+$z;
    }

    echo sum(5,6,7);

