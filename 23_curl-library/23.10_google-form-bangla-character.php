<?php
$data = [
    [
        'fname'  => urlencode('জন'),
        'lname' => urlencode('ডো'),
        'email' => 'jon@doe.com',
        'phone' => time(),
        'district' => 'washington'
    ],
    
];
foreach($data as $entry){
    $ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSdeRqdba5hQXRPpXB9Vq_YwhHQ8bVztJOuQwOUfvY-OCqEMNw/formResponse");
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, "entry.896992712={$entry['fname']}&entry.636483981={$entry['lname']}&entry.608635026={$entry['email']}&entry.1219294635={$entry['phone']}&entry.930218696={$entry['district']}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    if(curl_error($ch)){
        echo curl_error($ch);
    }else{
        echo $result;
    }
}
