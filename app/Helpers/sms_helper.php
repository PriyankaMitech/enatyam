<?php

    function sendSMS($mobile_number, $msg)
    {

        $username = 'knowledgehub';
        $password = '123456';
        $message = ($msg);
        $authKey = "je4K8IcXHkKEu9HuVj1jjA";//API key
        $mobileNumber = $mobile_number;
        $senderId = "OTPIMS"; //header
        $message = urlencode($message);
        $route = "default1";
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route,
            'DLT_TE_ID' => ''//dlt id
        );
        $url = "http://43.231.126.175/api/mt/SendSMS?user=knowledgehub&password=123456&senderid=".$senderId."&channel=Trans&DCS=0&flashsms=0&number=91".$mobile_number."&text=".$msg."&route=1"; //API link
        $ch = curl_init();
        $url = str_replace(" ", '%20', $url);
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_POST => true,
            // CURLOPT_POSTFIELDS => $postData
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // $output = curl_exec($ch);
        
        if (curl_errno($ch)) {
           return false;
        } else {
            return true;
        }
        curl_close($ch);
        return true;
    }