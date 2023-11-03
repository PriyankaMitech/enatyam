<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';


class EmailController extends BaseController
{

    public function sendEmail()
    {
      
        return view('sendEmail');
        
    }
   
    public function send_mail()
{

   
$verification_code = mt_rand(100000, 999999);

$email = $this->request->getPost('email');

$zoomMeetingLink = 'https://zoom.us/meeting/your-meeting-id';

	try {
		// Create a new PHPMailer instance
		$mail = new PHPMailer(true);
	
		// Configure SMTP settings
		$mail->isSMTP();
		$mail->Host       = 'smtp.gmail.com';
		$mail->SMTPAuth   = true;
		$mail->Username   = 'siddheshkadgemitech@gmail.com';
		$mail->Password   = 'lxnpuyvyefpbcukr';
		$mail->SMTPSecure = 'tls';
		$mail->Port       = 587;
	
		// Set email details
		$mail->setFrom('siddheshkadgemitech@gmail.com', 'Open Time Verification Code');
		$mail->addAddress($email, 'Recipient Name');
		$mail->isHTML(true);
		$mail->Subject = 'Email Verification Code';
		// $mail->Body    = $verification_code;
        $mail->Body = "Your OTP is: $verification_code <br><br> Zoom Meeting Link: <a href='$zoomMeetingLink'>$zoomMeetingLink</a>";
		// Send the email
		$mail->send();

		session()->setFlashdata('success', 'Email sent successfully.');
//  echo "<pre>";print_r($verification_code);exit();
return redirect()->to('FacultyDashboard');

	} catch (Exception $e) {
		// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

		session()->setFlashdata('success', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
	}
	
}
}
