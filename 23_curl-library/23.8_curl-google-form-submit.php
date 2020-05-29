<?php 

$ch = curl_init("https://docs.google.com/forms/u/0/d/e/1FAIpQLSdeRqdba5hQXRPpXB9Vq_YwhHQ8bVztJOuQwOUfvY-OCqEMNw/formResponse");
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'entry.896992712=Pobitro&entry.636483981=Raj&entry.608635026=pob@gmail.com&entry.1219294635=09324324&entry.930218696=Satkhira');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
if(curl_error($ch)){
    echo curl_error($ch);
}else{
    echo $result;
}