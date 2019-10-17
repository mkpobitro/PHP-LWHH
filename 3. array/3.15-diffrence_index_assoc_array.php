<?php
//৩.১৫ - দুইটি ইনডেক্সড এবং অ্যাসোসিয়েটেড অ্যারের ডিফারেন্স এবং ইন্টারসেকশন

    //Intersection Between 2 arrays:
    $numbers1 = array(2, 6, 12, 7, 3, 17, 27, 15);
    $numbers2 = array(22, 4, 11, 2, 13, 7, 1, 14, 12);

    $products1 = array('l'=>'laptop', 'm'=>'mobile', 't'=>'tv', 'r'=>'radio');
    $products2 = array('a'=>'apple', 'm'=>'mac', 's'=>'mobile', 'k'=>'phone', 't'=>'tv');

    $common  = array_intersect($numbers1, $numbers2); // for common in 2 arrays only for value not keys
    $commonP = array_intersect_assoc($products1, $products2);// will check common with key and values

    print_r($common); // [0]=>2 [2]=>12 [3]=>7
    print_r($commonP); // [t] => tv



    //Difference between 2 arrays:

    $diff  = array_diff($numbers1, $numbers2); // differentiate with only values
    $diffP = array_diff_assoc($products1, $products2); // differentiate with both key and values
    print_r($diff); //     [1]=>6 [4]=>3 [5]=>17 [6]=>27 [7]=>15
    print_r($diffP);// [l]=>laptop [m]=>mobile [r]=>radio

    
