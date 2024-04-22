<?php

$amount = 3000;
$merchant_id = "1226456";
$order_id = uniqid();
$merchant_secret = "MzczNDA0MzA2MTI1OTczMjI5MjgxMDQ5NDcwMDExMTM3NTIyMjUwNQ==";
$currency = "LKR";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

$array = [];

$array["items"] = "Door bell wireles";
$array["first_name"] = "Dinu";
$array["last_name"] = "Jayatissa";
$array["email"] = "dinu@gmail.com";
$array["phone"] = "0123456789";
$array["address"] = "No 123 ABC Road";
$array["city"] = "Colombo";

$array["amount"] = $amount;
$array["merchant_id"] = $merchant_id;
$array["order_id"] = $order_id;
$array["currency"] = $currency;
$array["hash"] = $hash;

$jsonObj = json_encode($array);

echo $jsonObj;

// echo "hi";

?>