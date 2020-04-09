<?php

$text = "Whole the world Are are now Danger moment";
//with strpos stripos
strpos($text, "world");
echo stripos($text, "are")."\n";
echo strrpos($text, "are")."\n";

//offset
echo strpos($text, "are", 17);

echo "\n";


$offset = strpos($text, "Whole");
if($offset !== false){
    echo "have found";
}else{
    echo "have not found";
}


