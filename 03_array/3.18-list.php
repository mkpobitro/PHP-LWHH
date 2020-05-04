<?php
//৩.১৮ - অ্যারে থেকে ভ্যারিয়েবলে ডেটা নেয়ার জন্য লিস্ট ফাংশনের ব্যবহার

    $students = array('fname', 'lname', 'email', 'result');
    $fastName = $students[0];
    $lastName = $students[1];
    $sEmail   = $students[2];
    $sResult  = $students[3];

    echo $sResult."\n"; //result

    // উপরের কোড কে list ফাংশন এর সাহায্যে এভাবে খুব সহজে পেতে পারি
    list($fastName, $lastName, $sEmail, $sResult) = $students;
    echo $sEmail; // email