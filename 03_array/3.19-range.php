 <?php
//৩.১৯ - রেঞ্জ ফাংশনের ব্যবহার এবং স্টেপিং - খুবই ইন্টারেস্টিং

    // $numbers = array(10,11,12,13,14,15);
    $numbers = array();
    for($i=10;$i<16;$i++){
        array_push($numbers, $i);
    }
    print_r($numbers);// [0] => 10 [1]=>11 [2]=>12 [3]=>13 [4]=>14 [5]=>15


    // উপরের কোডটা range() ফাংশনের সাহায্য খুব সহজে বের করতে পারি
    $number = range(11,15,2);//start, end, stepping
    print_r($number); // [0] => 11 [1]=>13 [2]=>15


    //যদি 0-42 পর্যন্ত 7 স্টেপিং নিয়ে প্রিন্ট করতে চাই তাহলে এভাবে করতে পারি
    foreach(range(0,42,7) as $evenNumber){
        if($evenNumber > 0){
            echo " The Even Number $evenNumber"."\n"; // 7 14 21 28 35 42
        }
    }

//  ২ এর পর থেকে ৬০ পর্যন্ত ১১ দিয়ে ভাগ যায় এরকম সংখ্যা বের করঃ
    foreach(range(0,60,11) as $elevenNumber){
        if($elevenNumber > 0){
            echo "$elevenNumber\n";
        }
    }