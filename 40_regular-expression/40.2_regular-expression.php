<?php
$str = <<<STRING
quick brown
fox    jumps   over the
lazy    dog
STRING;
// print_r( explode( " ", $str ) );
// echo count( explode( " ", $str ) );
echo preg_match_all('/[\S]+[\W]?/', $str, $matches);
