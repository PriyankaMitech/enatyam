<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\AdminModel;
use CodeIgniter\Controller;
use League\OAuth2\Client\Provider\Google;

helper('sms_helper');
require_once FCPATH . 'vendor/autoload.php';

class LoginController extends BaseController
{
    // public function __construct()
    // {
    //     $this->db = \Config\Database::connect();
    //  //   $this->load->library('google'); 
    // }
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function googlelogin()
    {
        // Configure the OAuth2 client
        $provider = new Google([
            'clientId'     => '451275634997-cmtkbhpah3rebm2sdbvqeiuq18rcavfg',
            'clientSecret' => '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',
            'redirectUri'  => base_url('LoginController/callback'),
        ]);
        $authorizationUrl = $provider->getAuthorizationUrl();

        // echo '<pre>';print_r($provider);die;
        return redirect()->to($authorizationUrl);
    }

    public function callback()
    {
        $provider = new Google([
            'clientId'     => '451275634997-cmtkbhpah3rebm2sdbvqeiuq18rcavfg',
            'clientSecret' => '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',
            'redirectUri'  => base_url('LoginController/callback'),
        ]);

        $token = $provider->getAccessToken('authorization_code', [
            'code' => $this->request->getGet('code'),
        ]);

        $user = $provider->getResourceOwner($token);
        // echo '<pre>';print_r($user);die;
        return redirect()->to('Dance');
    }

    public function register()
    {
        $validation = \Config\Services::validation(); // Get the validation instance
        $loginModel = new LoginModel();
        // print_r($data);die;
        $loginModel->insert($data);
        $last_insert_id = $loginModel->getInsertID();
        $getdata = [
            'full_name' => $this->request->getVar('full_name'),
            'email' => $this->request->getVar('email'),
            'mobile_no' => $this->request->getVar('mobile_number'),
            'Phone_countryCode'=> $this->request->getVar('countrie_code'),
            'role' => 'Student',
            'password' => $this->request->getVar('password'),
            'confirm_pass' => $this->request->getVar('confirm_pass'),
            'register_id' => $last_insert_id,
            'is_register_done' => 'Y',
            'course' => $this->request->getVar('course'),
            'sub_course' => $this->request->getVar('sub_course'),
            'age' => $this->request->getVar('age'),
            'experienceInput' => $this->request->getVar('experienceInput'),

        ];
        // print_r($getdata);die;
        // echo'<pre>';print_r($getdata);die;

        $this->session->set('user_id', $this->request->getVar($last_insert_id));
        $this->session->set('username', $this->request->getVar('full_name'));
        $this->session->set('email', $this->request->getVar('email'));
        $this->session->set('role', 'Student');

        $model = new AdminModel();
        $wherecond1 = array('is_deleted' => 'N');



        $output = $loginModel->setStudentName($getdata);
        // print_r($output);die;
        // return redirect()->to('dashboard');
        // } else {
        //     // Validation failed
        //     $data['validation'] = $validation;
        //     return redirect()->to('Home');
        // }
    }

    public function verifymobile()
    {
        $loginModel = new LoginModel();
        $otp = rand(999, 9999);
        $emailotp = rand(999, 9999);
        if ($_POST['otp'] == '' && $_POST['emailotp'] == '') {
            $loginModel = new LoginModel();
            $result['mobileexist'] = $loginModel->checkExist($this->request->getVar('countrie_code') . '-' .$_POST['mobile_number'], 'mobile_no', 'register');
            $result['emailexist'] = $loginModel->checkExist($_POST['email'], 'email', 'register');

            if ($result['mobileexist'] == '' && $result['emailexist'] == '') {
                $insert = $this->savedata($_POST, $otp, $emailotp);
                $getdata = [
                    'student_name' => $this->request->getVar('full_name'),
                    'email' => $this->request->getVar('email'),

                    'mobile_no' => $this->request->getVar('mobile_number'),

                    'Phone_countryCode' => $this->request->getVar('countrie_code'),
                    'register_id' => $insert['lastinsertid'],
                    'mobileWithCode'=> $this->request->getVar('countrie_code').$this->request->getVar('mobile_number'),

                ];

                 $phoneNumber =$getdata['mobileWithCode'];
                 $templates = "408169718530084";
         //        $name=$getdata['full_name'];
                 $msg = $emailotp;
               
                 whatsapp($phoneNumber,$templates,$msg);
                 $savestud = $loginModel->setStudentName($getdata);
                 $sms = 'Dear customer, your OTP for registration is ' . $otp . '. do not share to anyone. Thank you OTPIMS';
               
                 $output = sendSMS($_POST['mobile_number'], $sms);
                // $sendmail = sendConfirmationEmail($_POST['email'], '', 'OTP for registration', 'Please use this otp for registraion -> '.$emailotp.' !', $emailotp);
                $result['status'] = '200';
                $result = array(
                    'mobile' => $_POST['mobile_number'],
                    'email' => $_POST['email'],
                    'otp' => $otp,
                    'emailotp' => $emailotp
                );
                echo json_encode($result);
            } else {
                // $result['mob'] =$mob['mobileexist'] ;
                // $result['email'] =$mob['emailexist'] ;
                echo json_encode($result);
            }
        } else {

            // $checkotp = $loginModel->check_otp($_POST['otp'], $_POST['emailotp'], $_POST['countrie_code'].$_POST['mobile_number'], $_POST['email']);
            $checkotp = $loginModel->check_otp($_POST['otp'], $_POST['emailotp'], $_POST['mobile_number'], $_POST['email']);

            echo json_encode($checkotp);
        }
    }

    public function savedata($postdata, $otp, $emailotp)
    {
        $loginModel = new LoginModel();
        $data = [
            'full_name' => $postdata['full_name'],
            'email' => $postdata['email'],
            // 'mobile_no' => $this->request->getVar('countrie_code').'-'.$postdata['mobile_number'],
            'mobile_no' => $postdata['mobile_number'],
            'confirm_pass' => $postdata['confirm_pass'],
            'Phone_countryCode' => $this->request->getVar('countrie_code'),
            'mobileWithCode' => $this->request->getVar('countrie_code') . $postdata['mobile_number'],
            'password' => $postdata['password'],
            'role' => 'Student',
            'otp' => $otp,
            'emailotp' => $emailotp,
            'is_register_done' => 'N',
        ];
        $result = $loginModel->insert($data);
        $last_insert_id = $loginModel->getInsertID();
        if ($result) {
            $output = array(
                'otp' => $otp,
                'lastinsertid' => $last_insert_id
            );
            return $output;
        } else
            return false;
    }
    public function saveuserdata()
    {
        $email = $this->request->getPost('email');
        $course = $this->request->getPost('courses_id_g');
        $sub_course = $this->request->getPost('sub_courses_id_g');
        $age = $this->request->getPost('age');
        // $experience = $this->request->getPost('experience');
        $SessionType = $this->request->getPost('SessionType');
        $country = $this->request->getPost('country');
        $experienceInput = $this->request->getPost('experienceInput');
        $loginModel = new LoginModel();
        $data = [
            'course' => $course,
            'sub_course' => $sub_course,
            'age' => $age,
            'is_register_done' => 'Y',
            'country' => $country,
            // 'experience' => $experience,
            'experienceInput' => $experienceInput,
            'SessionType' => $SessionType,
        ]; 
        $affectedRows = $loginModel->updateUserByEmail($email, $data);
        $updatedUserData = $loginModel->getUserByEmail($email);
      
    if (isset($updatedUserData['mobile_no'])) {
        // Send WhatsApp message to user
        $phoneNumber = $updatedUserData['mobileWithCode'];
        $templates = "930840461869403";
        $msg = "We're thrilled to inform you that your registration was successful! You're now officially part of Enatyam learning community. Should you have any questions or need assistance, feel free to reach out to us. We're here to support you every step of the way. Welcome aboard, and let the learning adventure begin! Best Regards,";
        whatsapp($phoneNumber, $templates, $msg);

      //  $adminNumber = "918010041115";
        $templates = "930840461869403";
      //  $msg = "New student registered: " . $updatedUserData['full_name'] . ", Email: " . $updatedUserData['email'];
      $msg = "New student registered: " . $updatedUserData['full_name'] . " Email: " . $updatedUserData['email'];

      whatsappadmin($templates, $msg);
    } else {
           
        }
        $msg = 'Your registration is done';
        $Subject = 'Registration Confirmation';
        $ccEmails = ['cc1@example.com', 'cc2@example.com'];
        $tital = 'Congratulations! You Are Registration Confirmation';
        sendConfirmationEmail($email, $ccEmails, $Subject, $msg);
    
        session()->setFlashdata('success', 'Registration successful.');
    // return view('home');
        return redirect()->to('Home');
    }
    public function checkLoginDetails()
    {
        $request = \CodeIgniter\Config\Services::request();
    $session = \CodeIgniter\Config\Services::session();
        $loginModel = new LoginModel();
        $username = $request->getPost('username');
        $password = $request->getPost('password');
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $result = $loginModel->getUserByEmailAndPassword($username, $password);
        } else {
            $result = $loginModel->getUserByMobileNoAndPassword($username, $password);
        }
        // print_r($result);die;

        if (!empty($result)) {
            switch ($result['role']) {
                case 'Admin':
                case 'sub_admin':
                    return redirect()->to('Admindashboard');
                case 'Faculty':
                    $session->set($result);
                    return redirect()->to('FacultyDashboard');
                case 'Student':
                    $session->set($result);
                    return redirect()->to('StudentDashboard');
                default:
                    $session->setFlashdata('errormessage', 'Invalid role.');
                    return redirect()->to('Home');
            }
        } else {
            $session->setFlashdata('errormessage', 'Password is wrong.');  
            
            return redirect()->to('Home');
        }
            
    }


    public function ModelForLogin()
    {
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";die;
        return view('ModelForLogin');
    }



    public function logout()
    {
        $session = session();
        // session_destroy();
        $session->destroy();
        // print_r($_SESSION);die;
        return redirect()->to('/');
    }

    public function update_profile_data()
    {
        $data = [
            'role'  => $this->request->getVar('role'),
            'full_name'  => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile_no'  => $this->request->getVar('mobile_no'),
            'password'  => $this->request->getVar('password'),
            'confirm_pass'  => $this->request->getVar('cpassword'),

        ];
        $studentdata = [

            'student_name'  => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'mobile_no'  => $this->request->getVar('mobile_no'),
        ];

        $db = \Config\Database::Connect();

        if ($this->request->getVar('id') == "") {

            $add_data = $db->table('tbl_tax');
            $add_data->insert($data);
        } else {
            $update_data = $db->table('register')->where('id', $this->request->getVar('id'));
            $update_data->update($data);

            $update_studentdata = $db->table('student')->where('register_id', $this->request->getVar('id'));
            $update_studentdata->update($studentdata);
        }
        return redirect()->to('profilemanagment');
    }

    public function demojoininglink(){
        $model = new AdminModel();
        $wherecond = ['register_id' => $_SESSION['sessiondata']['id'],
        'Conducted_Demo' => 'N'
    ];
    $orderby = array('created_on' => 'DESC');

    $data['demo_data'] = $model->getsingleroworderby('free_demo_table', $wherecond, $orderby);

        
        // echo "<pre>";print_r( $data['demo_data']);exit();
        return view('demojoininglink',$data);

    }

    public function referandearn(){
        // $model = new AdminModel();
        // $wherecond = ['register_id' => $_SESSION['sessiondata']['id']];
        // $data['demo_data'] = $model->get_single_data('free_demo_table', $wherecond);
        
        // echo "<pre>";print_r( $data['demo_data']);exit();
        return view('referandearn');

    }

    public function bookdemo2(){
        $model = new AdminModel();
        $wherecond = ['register_id' => $_SESSION['sessiondata']['id'],
                      'Conducted_Demo' => 'N'
                        ];
        $orderby = array('created_on' => 'DESC');

        $data['demo_data'] = $model->getsingleroworderby('free_demo_table', $wherecond, $orderby);

        $wherecond = array('is_deleted' => 'N');

        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);

        
        
        // echo "<pre>";print_r( $data['courses_data']);exit();
        return view('bookdemo2',$data);

    }

    
}
