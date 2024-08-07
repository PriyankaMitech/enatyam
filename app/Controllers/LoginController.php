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
        if (isset($_SESSION['sessiondata'])) {
            helper(['form']);
            $data = [];
            echo view('register', $data);
            }else{
                return redirect()->to(base_url());

            }
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
        if (isset($_SESSION['sessiondata'])) {
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
    }else{
        return redirect()->to(base_url());

    }
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
    // public function saveuserdata()
    // {
    //     $email = $this->request->getPost('email');
    //     $course = $this->request->getPost('courses_id_g');
    //     $sub_course = $this->request->getPost('sub_courses_id_g');
    //     $age = $this->request->getPost('age');
    //     // $experience = $this->request->getPost('experience');
    //     $SessionType = $this->request->getPost('SessionType');
    //     $country = $this->request->getPost('country');
    //     $experienceInput = $this->request->getPost('experienceInput');
    //     $loginModel = new LoginModel();
    //     $data = [
    //         'course' => $course,
    //         'sub_course' => $sub_course,
    //         'age' => $age,
    //         'is_register_done' => 'Y',
    //         'country' => $country,
    //         // 'experience' => $experience,
    //         'experienceInput' => $experienceInput,
    //         'SessionType' => $SessionType,
    //     ]; 
    //     $affectedRows = $loginModel->updateUserByEmail($email, $data);
    //     $updatedUserData = $loginModel->getUserByEmail($email);
      
    // if (isset($updatedUserData['mobile_no'])) {
    //     // Send WhatsApp message to user
    //     $phoneNumber = $updatedUserData['mobileWithCode'];
    //     $templates = "930840461869403";
    //     $msg = "We're thrilled to inform you that your registration was successful! You're now officially part of Enatyam learning community. Should you have any questions or need assistance, feel free to reach out to us. We're here to support you every step of the way. Welcome aboard, and let the learning adventure begin! Best Regards,";
    //     whatsapp($phoneNumber, $templates, $msg);

    //   //  $adminNumber = "918010041115";
    //     $templates = "930840461869403";
    //   //  $msg = "New student registered: " . $updatedUserData['full_name'] . ", Email: " . $updatedUserData['email'];
    //   $msg = "New student registered: " . $updatedUserData['full_name'] . " Email: " . $updatedUserData['email'];

    //   whatsappadmin($templates, $msg);
    // } else {
           
    //     }
    //     $msg = 'We are delighted to inform you that your registration with Enatyam has been successfully completed! Welcome aboard!';
    //     $Subject = 'Registration Confirmation';
    //     $ccEmails = ['hello@enatyam.com'];
    //     $tital = 'Congratulations! You Are Registration Confirmation';
    //     sendConfirmationEmail($email, $ccEmails, $Subject, $msg);
    
    //     session()->setFlashdata('success', 'Registration successful.');
    // // return view('home');
    //     return redirect()->to('Home');
    // }
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
    //   print_r($updatedUserData);die;
    if (isset($updatedUserData['mobile_no'])) {
        // Send WhatsApp message to user
        $phoneNumber = $updatedUserData['mobileWithCode'];
        $templates = "930840461869403";
        $msg = "We're thrilled to inform you that your registration was successful! You're now officially part of Enatyam learning community. Should you have any questions or need assistance, feel free to reach out to us. We're here to support you every step of the way. Welcome aboard, and let the learning adventure begin! Best Regards,";
        whatsapp($phoneNumber, $templates, $msg);

      //  $adminNumber = "918010041115";
        $templates = "930840461869403";
      //  $msg = "New student registered: " . $updatedUserData['full_name'] . ", Email: " . $updatedUserData['email'];
    //   $msg = "New student registered: " . $updatedUserData['full_name'] . " Email: " . $updatedUserData['email'];
   $msg ="Notification: A new student has been successfully registered. Name: " . $updatedUserData['full_name'] . ", Email: " . $updatedUserData['email'] . ". Please review and update records accordingly.";
      whatsappadmin($templates, $msg);
    } else {
           
        }
        $msg = 'We are delighted to inform you that your registration with Enatyam has been successfully completed! Welcome aboard!';
        $Subject = 'Registration Confirmation';
        $ccEmails = ['hello@enatyam.com'];
        $tital = 'Congratulations! You Are Registration Confirmation';
        sendConfirmationEmail($email, $ccEmails, $Subject, $msg);
    
        session()->setFlashdata('success', 'Registration successful.');
   
        $session = \Config\Services::session();
        $session->set('sessiondata', $updatedUserData);

        $loginModel = new LoginModel();
        $username = $updatedUserData['email'];
        $password = $updatedUserData['password'];
        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $result = $loginModel->getUserByEmailAndPassword($username, $password);
        } else {
            $result = $loginModel->getUserByMobileNoAndPassword($username, $password);
        }

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

        if (isset($_SESSION['sessiondata'])) {
            $model = new AdminModel();
            $wherecond = array('is_deleted' => 'N');
            $session_pricing = $model->getalldata('sessions_pricing', $wherecond);
    
            // Check if data is retrieved successfully
            if (!empty($session_pricing)) {
                $data['session_pricing'] = $session_pricing; // Ensure the data is wrapped in an array
            } else {
                $data['session_pricing'] = [];
            }
            // echo'<pre>';print_r($data);die;
            return view('ModelForLogin', $data); // Pass the data array to the view
    
        } else {
            return redirect()->to(base_url());
        }
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
        if (isset($_SESSION['sessiondata'])) {
        $wherecond = ['register_id' => $_SESSION['sessiondata']['id'],
            'Conducted_Demo' => 'N'
        ];
        $orderby = array('created_on' => 'DESC');

        $data['demo_data'] = $model->getsingleroworderby('free_demo_table', $wherecond, $orderby);

        
        // echo "<pre>";print_r( $data['demo_data']);exit();
        return view('demojoininglink',$data);
    }else{
        return redirect()->to(base_url());

    }

    }

    public function referandearn(){
        if (isset($_SESSION['sessiondata'])) { 
        // $model = new AdminModel();
        // $wherecond = ['register_id' => $_SESSION['sessiondata']['id']];
        // $data['demo_data'] = $model->get_single_data('free_demo_table', $wherecond);
        
        // echo "<pre>";print_r( $data['demo_data']);exit();
        return view('referandearn');
    }else{
        return redirect()->to(base_url());

    }

    }

    public function bookdemo2(){
        if (isset($_SESSION['sessiondata'])) { 
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
    }else{
        return redirect()->to(base_url());

    }

    }

    public function loginwithotp()
    {
        $db = \Config\Database::connect(); // Connect to the database
        $mobilenumber = $this->request->getPost('mobilenumber');
    // print_r($mobilenumber);die;
        if ($mobilenumber) {
            $mobilenumbers = str_replace('+', '', $mobilenumber);
          
            $otp = rand(1000, 9999); // Generate a 4-digit OTP
            $phoneNumber = $mobilenumber;
            $templates = "930840461869403";
            $msg = "Dear customer, your OTP for login is '$otp'. Please do not share this with anyone. Thank you!";
    
            // Call the WhatsApp function to send the OTP
            whatsapp($phoneNumber, $templates, $msg);
            // print_r($otp);die;
            // Update the OTP in the database
            $builder = $db->table('register');
            $builder->set('loginotp', $otp);
            $builder->where('mobileWithCode', $mobilenumbers);
            $res = $builder->update();
    
            if ($res) {
                // Respond with success to trigger OTP input display on frontend
                return $this->response->setJSON(['success' => true, 'message' => 'OTP sent successfully.']);
            } else {
                return $this->response->setJSON(['success' => false, 'message' => 'Failed to update OTP in the database.']);
            }
        } else {
            return $this->response->setJSON(['success' => false, 'message' => 'Mobile number is required.']);
        }
    }
    // public function validateotp()
    // {
    //     $session = \Config\Services::session();
    //     $mobilenumber = $this->request->getPost('mobilenumber');
    //     $otp = $this->request->getPost('otp');
        
    //     $model = new AdminModel();
    //     $wherecond = array('mobileWithCode'=> $mobilenumber, 'loginotp' => $otp);
    //     $result = $model->getUserByMobileNoAndPassword('register', $wherecond);
    
    //     if (!empty($result)) {
    //         session()->set('id', $result['id']);
    //         $session->set('sessiondata', $result);
            
    //         switch ($result['role']) {
    //             case 'Admin':
    //             case 'sub_admin':
    //                 return redirect()->to('Admindashboard');
    //             case 'Faculty':
    //                 return redirect()->to('FacultyDashboard');
    //             case 'Student':
    //                 return redirect()->to('StudentDashboard');
    //             default:
    //                 $session->setFlashdata('errormessage', 'Invalid role.');
    //                 return redirect()->to('Home');
    //         }
    //     } else {
    //         // OTP validation failed
    //         $session->setFlashdata('errormessage', 'Invalid OTP or mobile number.');
    //         return redirect()->to('Home');
    //     }
    // }

   
    public function validateotp()
    {
        // echo "<pre>";print_r($_POST);exit();
        $request = \Config\Services::request();
        $session = \Config\Services::session();
      
        $loginModel = new LoginModel();
        $username = $request->getPost('mobilenumber');
        $otp = $request->getPost('insertotp');
        $password = $request->getPost('password');
        $combinedMobile = $request->getPost('combinedMobile');
        $mobilenumber = str_replace('+', '', $combinedMobile);
        // Use the combinedMobile if the loginOption is otp
        if ($request->getPost('loginOption') === 'otp' && !empty($mobilenumber)) {
            $username = $mobilenumber;
        }
    
        if ((filter_var($username, FILTER_VALIDATE_EMAIL)) && isset($password)) {
            $result = $loginModel->getUserByEmailAndPassword($username, $password);
        } else if (!empty($otp)) {
            $result = $loginModel->getuserbymobileotp($username, $otp);
        } else {
            $result = $loginModel->getUserByMobileNoAndPassword($username, $password);
        }
         
        if (!empty($result)) {
            $session->set($result);
    
            switch ($result['role']) {
                case 'Admin':
                case 'sub_admin':
                    return redirect()->to(base_url('Admindashboard'));
                case 'Faculty':
                    return redirect()->to(base_url('FacultyDashboard'));
                case 'Student':
                    return redirect()->to(base_url('StudentDashboard'));
                default:
                    $session->setFlashdata('errormessage', 'Invalid role.');
                    return redirect()->to(base_url('Home'));
            }
        } else {
            $session->setFlashdata('errormessage', 'user not found please check username and password');
            return redirect()->to(base_url('Home'));
        }
    }
    public function deleteuser()
    {
       
        date_default_timezone_set('Asia/Kolkata');
      
        $db = \Config\Database::connect();
      
        $threeMinutesAgo = date('Y-m-d H:i:s', strtotime('-3 minutes'));
      
        $wherecond = [
            'created_on <' => $threeMinutesAgo, // Use '<' to get records created more than 3 minutes ago
            'is_email_verify' => null,
            'role' => 'Student'
        ];
        $builder = $db->table('register');
        $builder->where($wherecond);
        $query = $builder->get();
        $users = $query->getResult();
        $usersToDelete = [];
        foreach ($users as $user) {
            $usersToDelete[] = $user->id; 
        }
       
        if (!empty($usersToDelete)) {
            $studentBuilder = $db->table('student');
            $studentBuilder->whereIn('register_id', $usersToDelete);
            $studentBuilder->delete();
            $builder->whereIn('id', $usersToDelete);
            $deleteResult = $builder->delete();   
            
        } else {
            echo 'No users found for deletion';
        }
        
        // Redirect to a page after processing
        return redirect()->to('/'); // Adjust redirection as needed
    }
    
}    