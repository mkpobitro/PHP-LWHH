<?php

$name = "Pobitro";

$str1 = 'My Name is $name'."\n"; //in single quote variable not working
$str2 = "My Name is $name"; //in double quote variable working
echo $str1;
echo $str2."\n";


//Another 2 systems available for string : 
//Heredoc
$heredoc = <<<EOD
Heredoc Code
welcome Bangladesh {$name}
EOD;
echo $heredoc."\n";

//Nowdoc
$nowdoc = <<<'EOD'
Nowdoc Code
Hello Bangladesh {$name}
EOD;
echo $nowdoc;