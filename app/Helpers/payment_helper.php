<?php

use CodeIgniter\Controller; 

// api keys
// define('CLIENT_ID', 'rzp_test_Ctoq9lGccMcZwj');
// define('CLIENT_SECRET', 'tk2fke25Gpw2otb6FX6hKpo4');

function create_order($orderData){
	
    $crl = curl_init('https://api.razorpay.com/v1/orders');
    // $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjb25zdW1lcklkIjoyOSwiZXhwIjoxNjk3Nzc5MTIyLCJ0b2tlbiI6IjAzNmQyNzEwOGQ4MzcwYmFlMzg3ZTZhYjVkYzRhNDMzIn0.YKYgMMK3KR67ilAyKXMvS5W0OFaDfUGKxLKeRKZUX9M';
    //echo $token;
    // print_r($json);die;
    // $param = getConcatenateBaseString('https://api.razorpay.com/v1/orders', 'POST', $json);
	// $secretKey = '1a33c6118d1e0c74f7a012991d0e4e39';
	// $generatedSignature = hash_hmac('SHA512', $param, $secretKey);

	curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($crl, CURLOPT_HTTPHEADER, array(
	    'Content-Type: application/json',
	    'Content-Length: ' . strlen($json),
	    // 'signature: '.$generatedSignature,
	    'dateAtClient: 2021-08-09T10:04:29.729Z',
	    'Authorization: Bearer '.$token // Additional custom headers can be added here
	));
	curl_setopt($crl, CURLOPT_POSTFIELDS, $orderData);
    curl_setopt($crl, CURLOPT_TIMEOUT, 10);
	// $rest = curl_exec($crl);
    echo '<pre>';print_r($crl);die;
	if ($rest === false) {
	    $error = curl_error($crl);
	    // Handle the error appropriately
	} else {
	   // print_r(json_decode($rest));
	}

	curl_close($crl);
	return json_decode($rest);
}