<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Libraries\Google;

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
        return view('home');

        
    }
    public function contactus()
    {
        
        return view('Contactus');
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
        
        return view('Career');
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

        if($this->validate($rules)){
            $data = [
                
                'email'  => $this->request->getVar('email'),
                'password'  => $this->request->getVar('password'),
                
            ];
            // echo "Inside iff";
            
            return redirect()->to('my_account');
        }else{
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
        
        return view('demo');
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
       // print_r($_SESSION['sessiondata']);die;
     if (isset($_SESSION['sessiondata'])) {
        $sessionData = $_SESSION['sessiondata'];

        $email = $sessionData['email'] ?? null;
        $password = $sessionData['password'] ?? null;

        if ($email !== null && $password !== null) {
            $session = session();
            
            if ($session->has('id')) {
                $user_id = $session->get('id');

                // echo "$user_id"; exit();
                $login_model = new LoginModel();
     
                $data['user_data'] = $login_model->get_user_data($user_id); 
        
                return view('StudentDashboard', $data);
            } else {
                return redirect()->to(base_url());
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
    $email = $loginModel->chechk_username_id($username);
    // echo "<pre>";
    // print_r($email);exit();
    return json_encode($email);
} else {
    return json_encode([]);
}

}
}