<?php
use CodeIgniter\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as PHPMailerException;;

require_once 'src/Exception.php';
require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';

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

    function sendConfirmationEmail($email, $ccEmails = [], $Subject=null, $msg=null, $otp=null, $password=null)
    {
        try {
          //  print_r($msg);die;
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host     = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'siddheshkadgemitech@gmail.com';
            $mail->Password = 'lxnpuyvyefpbcukr';
            $mail->SMTPSecure = 'tls';
            $mail->Port     = 587;
            $mail->setFrom('siddheshkadgemitech@gmail.com', 'Enatyam');
            $mail->addAddress($email, 'Recipient Name');
            // print_r($ccEmails);die;
            if ($ccEmails) {
                foreach ($ccEmails as $ccEmail) {
                    $mail->addCC($ccEmail);
                }
            }
            
            $mail->isHTML(true);
            $mail->Subject = $Subject;
            $mail->Body = $msg;
          //  print_r($mail);die;
             $mail->send();
        } catch (Exception $e) {
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
        
    }

//  function whatsapp($phoneNumber)
//  {

//         $curl = curl_init();

//         curl_setopt_array($curl, array(
//         CURLOPT_URL => 'https://api.interakt.ai/v1/public/message/',
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_ENCODING => '',
//         CURLOPT_MAXREDIRS => 10,
//         CURLOPT_TIMEOUT => 0,
//         CURLOPT_FOLLOWLOCATION => true,
//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//         CURLOPT_CUSTOMREQUEST => 'POST',
//         CURLOPT_POSTFIELDS =>'{
//             "countryCode": "+91",
//             "phoneNumber": "9372184591",
//             "callbackData": "some text here",
//             "type": "Template",
//             "template": {
//                 "name": "new_food_menu",
//                 "languageCode": "en",
//                 "bodyValues": [
//                     "body_variable_value_1"
                   
//                 ]
//             }
//         }',
//         CURLOPT_HTTPHEADER => array(
//             'Authorization: Basic <QVVyMUllOHdubDkxb1d6cGxwdEl6bXlEV3pQaUdYdmoyVlI5TzJFd0ZEdzo=>',
//             'Content-Type: application/json'
//         ),
//         ));

//         $response = curl_exec($curl);

//         curl_close($curl);
//         echo $response;

//  }
<<<<<<< HEAD
function whatsapp($phoneNumber,$templates,$msg = null,)
=======

function whatsapp($phoneNumber,$templates,$msg = null,)

>>>>>>> 4acea9d6bd4996dfed0ba3df2700adfb91082680
{
 
    $curl = curl_init();

    $data = array(
        "countryCode" => "+91",
        "phoneNumber" => $phoneNumber, // Use the passed phone number here
        "callbackData" => "some text here",
        "type" => "Template",
        "template" => array(
            "name" => $templates,
            "languageCode" => "en",
            "bodyValues" => array(
                $msg
            )
        )
    );
    $payload = json_encode($data);
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.interakt.ai/v1/public/message/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic <QVVyMUllOHdubDkxb1d6cGxwdEl6bXlEV3pQaUdYdmoyVlI5TzJFd0ZEdzo=>',
            'Content-Type: application/json'
        ),
    ));
    $response = curl_exec($curl);
 //   print_r($response);die;
    curl_close($curl);
    echo $response;
}
function whatsappadmin($adminNumber,$templates,$msg = null,)
{
 
    $curl = curl_init();

    $data = array(
        "countryCode" => "+91",
        "phoneNumber" => $adminNumber, // Use the passed phone number here
        "callbackData" => "some text here",
        "type" => "Template",
        "template" => array(
            "name" => $templates,
            "languageCode" => "en",
            "bodyValues" => array(
                $msg
            )
        )
    );
    $payload = json_encode($data);
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.interakt.ai/v1/public/message/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic <QVVyMUllOHdubDkxb1d6cGxwdEl6bXlEV3pQaUdYdmoyVlI5TzJFd0ZEdzo=>',
            'Content-Type: application/json'
        ),
    ));
    $response = curl_exec($curl);
 //  print_r($response);die;
    curl_close($curl);
    echo $response;
}