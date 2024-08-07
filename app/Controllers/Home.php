<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Libraries\Google;
use App\Models\AdminModel;
use App\Models\StudentModel;



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

        // echo "<pre>";print_r($data['bharatanatyam']);exit();


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
    public function Kathak()
    {

        return view('Kathak');
    }
    public function Bharatnatyam()
    {

        return view('Bharatnatyam');
    }

    public function Odissi()
    {

        return view('Odissi');
    }

    public function Bollywood()
    {

        return view('Bollywood');
    }

    public function Western()
    {

        return view('Western');
    }

    public function Semiclassical()
    {

        return view('Semiclassical');
    }

    public function Bhangra()
    {

        return view('Bhangra');
    }

    public function Folk()
    {

        return view('Folk');
    }
    public function CorporateYoga()
    {

        return view('Corporate-Yoga');
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
        $model = new AdminModel();
        $data['blogs']=$model->getallblogs();
        $wherecond = array('is_deleted' => 'N');

        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);
    //     echo "<pre>";   
    // print_r($data['courses_data']);die;
        return view('blog',$data);
    }
    public function music()
    {

        return view('music');
    }

    public function HindustaniVocal()
    {

        return view('HindustaniVocal');
    }

    public function WesternSinging()
    {

        return view('WesternSinging');
    }

    public function CarnaticVocal()
    {

        return view('CarnaticVocal');
    }
    public function SemiClassicals()
    {

        return view('SemiClassicals');
    }
    public function PlaybackSinging()
    {

        return view('PlaybackSinging');
    }
   
    public function Instruments()
    {

        return view('Instruments');
    }
    public function Guitar()
    {

        return view('Guitar');
    }
    public function Flute()
    {

        return view('Flute');
    }
    public function Tabla()
    {

        return view('Tabla');
    }
    public function Sitar()
    {

        return view('Sitar');
    }
    public function Veena()
    {

        return view('Veena');
    }
    public function Piano()
    {

        return view('Piano');
    }
    public function Violin()
    {

        return view('Violin');
    }
    public function Keyboard()
    {

        return view('Keyboard');
    }
    public function Harmonium()
    {

        return view('Harmonium');
    }

    public function Yoga()
    {

        return view('Yoga');
    }
    public function PrenatalYoga()
    {

        return view('PrenatalYoga');
    }
    public function StressReduction()
    {

        return view('StressReduction');
    }
    public function Flexibility()
    {

        return view('Flexibility');
    }
    public function WeightLossYoga()
    {

        return view('WeightLossYoga');
    }
    public function EverydayYoga()
    {

        return view('EverydayYoga');
    }
    public function YogaforChronic()
    {

        return view('YogaforChronic');
    }
    public function YogaforKids()
    {

        return view('YogaforKids');
    }
    public function Meditation()
    {

        return view('Meditation');
    }
    public function CustomiseYoga()
    {

        return view('CustomiseYoga');
    }
    public function NutritionCounselling()
    {

        return view('NutritionCounselling');
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
        if (isset($_SESSION['sessiondata'])) {

        return view('demoprofile');
    }else{
        return redirect()->to(base_url());

    }
    }
    public function demoprofile2()
    {
        if (isset($_SESSION['sessiondata'])) {

        return view('demoprofile2');
    }else{
        return redirect()->to(base_url());

    }
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
        if (isset($_SESSION['sessiondata'])) {
        return view('FacultyProfile');
    }else{
        return redirect()->to(base_url());

    }
    }

    public function StudentDashboard()
{
    // print_r($_SESSION['sessiondata']);die;
            $adminModel = model('AdminModel');
            $session = session();
            $user_id = $session->get('id');
            $expiresessions = $adminModel->getSessionno($user_id);
            $sessioncont = $expiresessions->Session_no ?? null;
            $paymentsessions = $adminModel->getpaymentsession($user_id);
            $sessioncont = $expiresessions->Session_no ?? null;

        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];
            // echo '<pre>';print_r($sessionData);die;
            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;
            if ($email !== null && $password !== null) {

          
            if ($session->has('id') && $sessionData['Payment_status'] == 'Y') {
                $user_id = $session->get('id');
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
                $meeting = $login_model->getmeetinglink($user_id);
                $notifications = $adminModel->getUser($user_id);
                $count = 0;
                    if ($notifications) {
                        $count = count($notifications);
                    } else {
                        $count = 0;
                    }
                return view('StudentDashboard', 
                [
                    'data' => $data,
                    'meeting'=>$meeting,
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
//     $sessioncont = $expiresessions->Session_no ?? null;
//      $paymentsessions = $adminModel->getpaymentsession($user_id);
//      $sessioncont = $expiresessions->Session_no ?? null;

//     if (isset($_SESSION['sessiondata'])) {
//         $sessionData = $_SESSION['sessiondata'];
//         $email = $sessionData['email'] ?? null;
//         $password = $sessionData['password'] ?? null;
//         if ($email !== null && $password !== null) {
          

//             // If Payment_status is 'Y' and SessionsCount matches expiration session
//             if ($session->has('id') && $sessionData['Payment_status'] == 'Y') {
//                 $user_id = $session->get('id');
//             //    print_r($sessioncont);
//             //                 print_r($paymentsessions);die;
//                 if ($sessioncont == $paymentsessions) {
//                     $status = 'N';
//                     $renewal = 'Y';
//                     $adminModel->updadteattandance($user_id, $renewal);
//                     $adminModel->updatePaymentStatus($user_id, $status);
//                     $session = session();
//                     $session->destroy();
//                     return redirect()->to('/');
                    
//                 }

//                 $login_model = new LoginModel();
//                 $data['user_data'] = $login_model->get_user_data($user_id);
//                 $notifications = $adminModel->getUser($user_id);
                
//                 $StudentModel = new StudentModel();
//                 $registerId = $session->get('id');
//                 $Sheduledatafromfaculty =  $StudentModel->fetchid($registerId);
//                 $assignTeacherId = $Sheduledatafromfaculty->Assign_Techer_id;
//                 $wherecond = array('faculty_registerid' => $assignTeacherId);
//                 $wherecond2 = array('faculty_id' => $assignTeacherId);
//                 $data['slot_data'] = $adminModel->getalldata('tbl_student_shedule', $wherecond2);

//                 // echo "<pre>";print_r($data['slot_data']);exit();
    

//                 $count = 0;

//                     if ($notifications) {
//                         $count = count($notifications);
//                     } else {
//                         $count = 0;
//                     }

//                 return view('StudentDashboard', [
//                     'data' => $data,
//                     'notifications' => $notifications,
//                     'notificationCount' => $count,
//                     'slot_data' =>$data['slot_data'],
//                 ]);
//             } else {         
                  
//                 return redirect()->to('ModelForLogin');
//             }
//         } else {
//             return redirect()->to(base_url());
//         }
//     } else {
//         return redirect()->to(base_url());
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
        $model = new AdminModel();

        $uri = service('uri');

        // Get the second segment of the URI
        $blog_id = $uri->getSegment(2);


        $wherecond = array('id' => $blog_id);

        $data['blog_data'] = $model->get_single_data('blogs', $wherecond);

        // echo "<pre>";print_r($data['blog_data']);exit();
        return view('Blog/historyofkathak',$data);
    }



  
}
