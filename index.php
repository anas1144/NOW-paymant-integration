<?php
// set post fields
// $post = [
//     'price_amount' => 3999.5,
//     'price_currency' => "usd",
//     'pay_currency'   => "btc"
// ];
// $data = http_build_query($post);
// //$cURLConnection = curl_init();
// $ch = curl_init('https://api.sandbox.nowpayments.io/v1/payment');
//// //curl_setopt($cURLConnection, CURLOPT_URL, 'https://hostname.tld/phone-list');
//
// curl_setopt($ch, CURLOPT_HEADER, false);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'x-api-key: GJH64RC-S55MMC2-KJN5MXC-22MTM29',
//     'Content-Type: application/json'
// ));
//
// curl_setopt($ch, CURLOPT_POST, true);  
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//
//// // execute!
// $response = curl_exec($ch);
//
//// // close the connection, release resources used
// curl_close($ch);
//
//// // do anything you want with your response
// var_dump($response);



// get

//$cURLConnection = curl_init();
//
//curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.sandbox.nowpayments.io/v1/payment/4541530918');
//
//curl_setopt($cURLConnection, CURLOPT_HEADER, false);
//curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
//    'x-api-key: GJH64RC-S55MMC2-KJN5MXC-22MTM29',
//    
//));
//
//curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
//
//// execute!
//$response = curl_exec($cURLConnection);
//
//// close the connection, release resources used
//curl_close($cURLConnection);
//
//// do anything you want with your response
//var_dump($response);

?>






<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

 $( document ).ready(function() {
     console.log( "ready!" );
     $.ajax({
                 type: 'POST',
                 dataType: 'JSON',
                 url: 'https://api.sandbox.nowpayments.io/v1/payment',
                 headers: {
                 'x-api-key': 'GJH64RC-S55MMC2-KJN5MXC-22MTM29',
                 'Content-Type': 'application/json'

                 },
                 data:{
                     "price_amount": 3999.5,
                     "price_currency": "usd",
                     "pay_amount": 0.8102725,
                     "pay_currency": "btc",
                   
                     "order_id": "RGDBP-21314",
                     "order_description": "Apple Macbook Pro 2019 x 1",
                     "case" : "success"
                     },
                 success: function (response) {
                    console.log(response);
                   
                 },
                 error: function (error) {
                     console.log(error);
                 }
             });
 });
            
</script>
