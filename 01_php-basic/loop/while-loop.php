    <?php

    $i = 0;
    while($i<10){
        $i++;
        echo $i.PHP_EOL;
    }

    echo PHP_EOL;



// ১.২৭ - হোয়াইল লুপে ++ নিয়ে যেটা মাথায় রাখতে হবে 
    $i = 0;
    while($i<5){
        echo $i; // output = 01234
        echo PHP_EOL;
        $i++;
    }

    echo "=============\n";

    $i = 0;
    while($i++<5){
        echo $i.PHP_EOL;// output = 12345
    }

    echo "=============\n";

    $i = 0;
    while(++$i<5){
        echo $i."\n";// output = 1234
    }