<?php

namespace App\Controllers;

use App\Models\PaymentModel;
use App\Models\AdminModel;

class PaymentController extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->session     = \Config\Services::session();
    }

    public function index()
    {
        $data = [];
        $data['title']              = 'Checkout payment | Infovistar';
        $data['callback_url']       = base_url() . 'callback';
        $data['surl']               = base_url() . 'success';;
        $data['furl']               = base_url() . 'failed';;
        $data['currency_code']      = 'INR';
        echo view("checkout", $data);
    }

    private function curl_handler($payment_id, $amount)
    {
        $url            = 'https://api.razorpay.com/v1/payments/' . $payment_id . '/capture';
        $key_id         = RAZOR_KEY_ID;
        $key_secret     = RAZOR_KEY_SECRET;
        $fields_string  = "amount=$amount";
        //cURL Request
        $ch = curl_init();
        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, $key_id . ':' . $key_secret);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        return $ch;
    }

    public function payment()
    {


      
        // echo "<pre>";print_r($_POST);exit();
        $adminmodel = new AdminModel();
        $amount1 = $this->request->getPost('total_amount')/100;
        if (!empty($this->request->getPost('razorpay_payment_id')) && !empty($this->request->getPost('merchant_order_id'))) {

            $razorpay_payment_id     = $this->request->getPost('razorpay_payment_id');
            $merchant_order_id         = $this->request->getPost('merchant_order_id');

            $this->session->set('razorpay_payment_id', $this->request->getPost('razorpay_payment_id'));
            $this->session->set('merchant_order_id', $this->request->getPost('merchant_order_id'));
            $currency_code = 'INR';
            
            $amount = $this->request->getPost('total_amount');

            $success = false;
            $error = '';
            try {
                $ch = $this->curl_handler($razorpay_payment_id, $amount);
                // execute post
                $result = curl_exec($ch);
                $finaloutput = json_decode($result);
                $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if ($result === false) {
                    $success = false;
                    $error = 'Curl error: ' . curl_error($ch);
                } else {
                    $response_array = json_decode($result, true);
                    //Check success response
                    if ($http_status === 200 and isset($response_array['error']) === false) {
                        // echo "<pre>";print_r($_SESSION);exit();

                        $success = true;
                        $msg = "Payment successfully done by " . session('sessiondata')['user_name'] . " Rs.$amount1. and he/she selected for " . session('sessiondata')['SessionType']. "session.";
                        // $msg1 = "Payment Successfully Done...!!!";
                        $msg1 = "Dear " . session('sessiondata')['user_name'] . ", 🎉 Thank You and Congratulations on completing enrollment and payment Rs." . $amount1 . "! 🎉 You're now officially part of our learning community! Get ready for an enriching journey ahead. Please reach out to our customer care for any assistance.";

                        $templates = "930840461869403";

                        $number = session('sessiondata')['mobileWithCode'];

                        whatsapp($number, $templates, $msg1);

                        whatsappadmin($templates, $msg);


                    } else {
                        $success = false;
                        if (!empty($response_array['error']['code'])) {
                            $error = $response_array['error']['code'] . ':' . $response_array['error']['description'];
                        } else {
                            $error = 'RAZORPAY_ERROR:Invalid Response <br/>' . $result;
                        }
                    }
                }
                curl_close($ch);
            } catch (Exception $e) {
                $success = false;
                $error = 'Request to Razorpay Failed';
                // 
            }
            
            if ($success === true) {
                if (!empty($this->session->get('ci_subscription_keys'))) {
                    $this->session->unset('ci_subscription_keys');
                }
             
                    $email = $this->session->get('email');
                    $msg = 'Dear '.$this->session->get('user_name').',
                    <br><br>
                    This is to confirm that we have received your payment for invoice '.$_POST['merchant_trans_id'].'. The total amount received is '.$_POST['total_amount'].'. <br> Thank you for your timely payment. We looking forward to seeing you in the future. <br><br> Thank you, <br>Enatyam'; 
                    $Subject ='Payment Confirmation';
                    $ccEmails = ['admin@gmail.com', 'cc2@example.com'];
                    sendConfirmationEmail($email,$ccEmails, $Subject, $msg);
                    
                    $paydetails = $adminmodel->insert_payment($finaloutput);
                    $_POST['total_amount'] = $_POST['total_amount']/100;
                    $_POST['status'] = 'Y';
                    $payment = $adminmodel->insert_formdata('id', 'payment', $_POST);
                    
                    if ($result) {
                        session()->destroy();
                        return redirect()->to($this->request->getPost('merchant_surl_id'));
                    }else {
                        $this->session->setFlashdata('insert error', 'Error while inserting data into database.');
                        return redirect()->to(base_url());
                    }
                // }
            } else {
                return redirect()->to($this->request->getPost('merchant_furl_id'));
            }
        } else {
            echo 'An error occured. Contact site administrator, please!';
        }
    }

    public function success()
    {
        $data['title'] = 'Razorpay Success | Infovistar';
        $data['transactionid'] = $this->session->get('razorpay_payment_id');
        $data['Orderid'] = $this->session->get('merchant_order_id');

        echo view('payment_s', $data);
    }

    public function failed()
    {
        $data['title'] = 'Razorpay Failed | Infovistar';
        $data['transactionid'] = $this->session->get('razorpay_payment_id');
        $data['Orderid'] = $this->session->get('merchant_order_id');
        echo view('payment_f', $data);
    }
}
