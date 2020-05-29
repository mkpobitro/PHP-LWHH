<?php

$word = "Sportsman";
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}";
echo "<h1>Meaning of {$word}</h1>";
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

echo "<strong>Short Meaning:</strong> {$short}.<br><br>";


echo "<strong>Long Meaning:</strong> {$long}";

