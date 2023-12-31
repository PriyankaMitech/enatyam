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
        return view('home', $data);
    }
    public function contactus()
    {

        return view('Contactus');
    }
    public function test()
    {

        return view('testdash');
    }
    public function RefundPolicy()
    {

        return view('RefundPolicy');
    }
    public function TermsAndConditions()
    {

        return view('TermsAndConditions');
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
    public function Dance()
    {

        return view('Dance');
    }
    public function Home()
    {

        return view('home');
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

        return view('home');
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
    public function demo1()
    {

        return view('demo1');
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
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;
            if ($email !== null && $password !== null) {
                $session = session();
                if ($session->has('id') && $sessionData['Payment_status'] == 'Y') {
                    $user_id = $session->get('id');

                    $login_model = new LoginModel();
                    $adminModel = model('AdminModel');
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

    public function chechk_username_id()
    {
        $loginModel = new LoginModel();
        $username = $this->request->getPost('username');

        if ($username) {
            $email = $loginModel->checkexist($username, 'email');
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

        if ($mobile_no) {
            $mobileno = $loginModel->checkexist($mobile_no, 'mobile_no');
            // echo "<pre>";
            // print_r($email);exit();
            return json_encode($mobileno);
        } else {
            return json_encode([]);
        }
    }
}
