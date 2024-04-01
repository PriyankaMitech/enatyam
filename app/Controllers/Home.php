<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Libraries\Google;
use App\Models\AdminModel;



class Home extends BaseController
{
    public function __construct()
    {
        // $this->db = \Config\Database::connect();
        // $this->load->library('google'); 
        $this->Loginmodel = new \App\Models\LoginModel(); // Instantiate the UserModel

    }

    public function index()
    {
        // $google = new Google();
        // $data['loginURL'] = $this->google->loginURL(); 
        // print_r($data);die;

        $model = new AdminModel();
        $wherecond1 = array('is_deleted' => 'N');
        $data['country_data'] = $model->getalldata('countries', $wherecond1);

        $data['katakc'] = $model->getstarcount();
        $data['bharatanatyam'] = $model->getstarcount1();
        $data['bollywood'] = $model->getstarcount2();
        $data['westerndnce'] = $model->getstarcount3();
        $data['hindustanivocal'] = $model->getstarcount4();
        $data['carnaticvocal'] = $model->getstarcount5();
        $data['bollywoodsinging'] = $model->getstarcount6();
        $data['playbacksinging'] = $model->getstarcount7();
        $data['yoga'] = $model->getstarcount8();
        $data['meditation'] = $model->getstarcount9();
        $data['nuitritionalguidance'] = $model->getstarcount10();
        $data['musicalinstruments'] = $model->getstarcount11();

        $data['katakr'] = $model->getusercount();
        $data['bharatanatyamr'] = $model->getusercount1();
        $data['bollywoodr'] = $model->getusercount2();
        $data['westerndncer'] = $model->getusercount3();
        $data['hindustanivocalr'] = $model->getusercount4();
        $data['carnaticvocalr'] = $model->getusercount5();
        $data['bollywoodsingingr'] = $model->getusercount6();
        $data['playbacksingingr'] = $model->getusercount7();
        $data['yogar'] = $model->getusercount8();
        $data['meditationr'] = $model->getusercount9();
        $data['nuitritionalguidancer'] = $model->getusercount10();
        $data['musicalinstrumentsr'] = $model->getusercount11();

        // echo "<pre>";print_r($data['katakr']);exit();


        // echo $data['total_ratings'];exit();
        // echo "<pre>";print_r($data['bharatanatyam']);exit();

        return view('home', $data);
    }
    public function contactus()
    {

        return view('Contactus');
    }
    public function pricing()
    {

        return view('pricingpage');
    }
    public function test()
    {

        return view('testdash');
    }
    public function RefundPolicy()
    {

        return view('RefundPolicy');
    }
    public function invester()
    {

        return view('invester');
    }
    public function Career()
    {
        $model = new AdminModel();
        $wherecond1 = array('is_deleted' => 'N');
        $data['country_data'] = $model->getalldata('countries', $wherecond1);
        //print_r($data['courses_data']);die;
        return view('Career', $data);
    }
    public function Carrier()
    {

        return view('Carrier');
    }
    public function PrivacyPolicy()
    {

        return view('PrivacyPolicy');
    }
    public function termsandconditions()
    {

        return view('TermsandConditions');
    }
    public function Offilinstudio()
    {

        return view('Offilinstudio');
    }
    public function Dance()
    {

        return view('Dance');
    }
    public function Home()
    {
        $model = new AdminModel();
        $wherecond1 = array('is_deleted' => 'N');
        $data['country_data'] = $model->getalldata('countries', $wherecond1);

        $data['katakc'] = $model->getstarcount();
        $data['bharatanatyam'] = $model->getstarcount1();
        $data['bollywood'] = $model->getstarcount2();
        $data['westerndnce'] = $model->getstarcount3();
        $data['hindustanivocal'] = $model->getstarcount4();
        $data['carnaticvocal'] = $model->getstarcount5();
        $data['bollywoodsinging'] = $model->getstarcount6();
        $data['playbacksinging'] = $model->getstarcount7();
        $data['yoga'] = $model->getstarcount8();
        $data['meditation'] = $model->getstarcount9();
        $data['nuitritionalguidance'] = $model->getstarcount10();
        $data['musicalinstruments'] = $model->getstarcount11();


        return view('home',$data);
    }
    public function blog()
    {

        return view('blog');
    }
    public function music()
    {

        return view('music');
    }
    public function Instruments()
    {

        return view('Instruments');
    }
    public function Yoga()
    {

        return view('Yoga');
    }
    public function Profile()
    {

        return view('profile');
    }
    public function StartNowPricing()
    {

        return view('StartNowPricing');
    }
    public function returnhome()
    {
        $model = new AdminModel();
        $wherecond1 = array('is_deleted' => 'N');
        $data['country_data'] = $model->getalldata('countries', $wherecond1);

        $data['katakc'] = $model->getstarcount();
        $data['bharatanatyam'] = $model->getstarcount1();
        $data['bollywood'] = $model->getstarcount2();
        $data['westerndnce'] = $model->getstarcount3();
        $data['hindustanivocal'] = $model->getstarcount4();
        $data['carnaticvocal'] = $model->getstarcount5();
        $data['bollywoodsinging'] = $model->getstarcount6();
        $data['playbacksinging'] = $model->getstarcount7();
        $data['yoga'] = $model->getstarcount8();
        $data['meditation'] = $model->getstarcount9();
        $data['nuitritionalguidance'] = $model->getstarcount10();
        $data['musicalinstruments'] = $model->getstarcount11();

        // echo $data['total_ratings'];exit();
        // echo "<pre>";print_r($data['bharatanatyam']);exit();

        return view('home', $data);
    }
    public function shop()
    {

        return view('shop');
    }
    public function Checkout()
    {

        return view('Checkout');
    }
    public function showData()
    {

        return view('Cart');
    }
    public function Session()
    {

        return view('Session');
    }
    public function gocart()
    {

        return view('cart');
    }
    public function Profile2()
    {

        return view('Profile2');
    }

    public function Login()
    {
        $rules = [

            'email'    => 'required',
            'password'  => 'required',


        ];

        if ($this->validate($rules)) {
            $data = [

                'email'  => $this->request->getVar('email'),
                'password'  => $this->request->getVar('password'),

            ];
            // echo "Inside iff";

            return redirect()->to('my_account');
        } else {
            // echo "Inside else";
            $data['validation'] = $this->validator;

            
            echo view('home', $data);
        }
    }

    public function my_account()
    {

        return view('my_account');
    }
    public function AdminDashboard()
    {

        return view('AdminDashboard');
    }
    public function demoprofile()
    {

        return view('demoprofile');
    }
    public function demoprofile2()
    {

        return view('demoprofile2');
    }
    public function demobooking()
    {
        $model = new AdminModel();
        $wherecond1 = array('is_deleted' => 'N');

        $data['country_data'] = $model->getalldata('countries', $wherecond1);


        return view('demobooking',$data);
    }
    public function demo()
    {
        $model = new AdminModel();
        $wherecond1 = array('is_deleted' => 'N');

        $data['country_data'] = $model->getalldata('countries', $wherecond1);
        return view('demo', $data);
    }
    public function FacultyDashboard()
    {

        return view('faculty');
    }
    public function FacultyProfile()
    {

        return view('FacultyProfile');
    }

    public function StudentDashboard()
{
    $adminModel = model('AdminModel');
    $session = session();
    $user_id = $session->get('id');
    $expiresessions = $adminModel->getSessionno($user_id);
    $sessioncont = $expiresessions->Session_no ?? null;
     $paymentsessions = $adminModel->getpaymentsession($user_id);
     $sessioncont = $expiresessions->Session_no ?? null;

    if (isset($_SESSION['sessiondata'])) {
        $sessionData = $_SESSION['sessiondata'];
        $email = $sessionData['email'] ?? null;
        $password = $sessionData['password'] ?? null;
        if ($email !== null && $password !== null) {
          

            // If Payment_status is 'Y' and SessionsCount matches expiration session
            if ($session->has('id') && $sessionData['Payment_status'] == 'Y') {
                $user_id = $session->get('id');
            //    print_r($sessioncont);
            //                 print_r($paymentsessions);die;
                if ($sessioncont == $paymentsessions) {
                    $status = 'N';
                    $renewal = 'Y';
                    $adminModel->updadteattandance($user_id, $renewal);
                    $adminModel->updatePaymentStatus($user_id, $status);
                    $session = session();
                    $session->destroy();
                    return redirect()->to('/');
                    
                }

                $login_model = new LoginModel();
                $data['user_data'] = $login_model->get_user_data($user_id);
                $notifications = $adminModel->getUser($user_id);
                
            

                $count = 0;

                    if ($notifications) {
                        $count = count($notifications);
                    } else {
                        $count = 0;
                    }

                return view('StudentDashboard', [
                    'data' => $data,
                    'notifications' => $notifications,
                    'notificationCount' => $count,
                ]);
            } else {         
                  
                return redirect()->to('ModelForLogin');
            }
        } else {
            return redirect()->to(base_url());
        }
    } else {
        return redirect()->to(base_url());
    }
}
// public function StudentDashboard()
// {
//     $adminModel = model('AdminModel');
//     $session = session();
   
//     $user_id = $session->get('id');
//     $expiresessions = $adminModel->getSessionno($user_id);

//     // Check if $expiresessions is not null before accessing its properties
//     if ($expiresessions !== null && isset($expiresessions->Session_no) && isset($expiresessions->payment_id)) {
//         $sessioncont = $expiresessions->Session_no;
//         $payment_id = $expiresessions->payment_id;
//         $paymentsessions = $adminModel->getpaymentsession($payment_id);

//         if (isset($_SESSION['sessiondata'])) {
//             $sessionData = $_SESSION['sessiondata'];
//             $email = $sessionData['email'] ?? null;
//             $password = $sessionData['password'] ?? null;
//             if ($email !== null && $password !== null) {
//                 // If Payment_status is 'Y' and SessionsCount matches expiration session
//                 if ($session->has('id') && $sessionData['Payment_status'] == 'Y') {
//                     $user_id = $session->get('id');
//                     if ($sessioncont == $paymentsessions) {
//                         $status = 'N';
//                         $renewal = 'Y';
//                         $adminModel->updadteattandance($user_id, $renewal);
//                         $adminModel->updatePaymentStatus($user_id, $status);
//                         $session->destroy();
//                         return redirect()->to('/');
//                     }

//                     $login_model = new LoginModel();
//                     $data['user_data'] = $login_model->get_user_data($user_id);
//                     $notifications = $adminModel->getUser($user_id);

//                     $count = count($notifications);
//                     return view('StudentDashboard', [
//                         'data' => $data,
//                         'notifications' => $notifications,
//                         'notificationCount' => $count,
//                     ]);
//                 } else {         
//                     return redirect()->to('ModelForLogin');
//                 }
//             } else {
              
//                 return redirect()->to(base_url());
//             }
            
//         } else {
//             return redirect()->to(base_url());
//         }
//     } else {
//         // Handle case where $expiresessions or its properties are null
//         return redirect()->to('ModelForLogin');
//     }
// }
    public function chechk_username_id()
    {
        $loginModel = new LoginModel();
        $username = $this->request->getPost('username');

        if ($username) {
            $email = $loginModel->checkExist($username, 'email', 'register');
            // echo "<pre>";
            // print_r($email);exit();
            return json_encode($email);
        } else {
            return json_encode([]);
        }
    }


    public function chechk_mobile_no_id()
    {
        $loginModel = new LoginModel();
        $mobile_no = $this->request->getPost('mobile_no');
        $phone =  $this->request->getPost('phone');
        // print_r($phone);
        // die;
        // $result = $this->loginModel->checkExist($mobile_no, 'mobile_no' 'register');


        if ($mobile_no) {
            $mobileno = $loginModel->checkExist($mobile_no, 'mobile_no', 'register');

            // echo "<pre>";
            // print_r($email);exit();
            return json_encode($mobileno);
        } else {
            if ($phone) {
                $mobileno = $loginModel->checkExist($phone, 'phone', 'carrier');
                return json_encode($mobileno);
            } else {
                return json_encode([]);
            }
        }
    }
    public function HistoryofKathak()
    {

        return view('Blog/historyofkathak');
    }

  
}
