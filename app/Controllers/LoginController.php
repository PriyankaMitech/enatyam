<?php 
namespace App\Controllers;
use App\Models\LoginModel;
class LoginController extends BaseController
{
    public function __construct()
{
    $this->db = \Config\Database::connect();
}
    public function index() {
        helper(['form']);
        $data = [];
        echo view('register',$data);
    }
 
   

    public function register()
    {
   //     print_r($_POST);die;
        $validation = \Config\Services::validation(); // Get the validation instance
        $loginModel = new LoginModel();
        
        // Define validation rules
        $validation->setRules([
            'full_name' => 'required',
            // 'role' => 'required',
            'password' => 'required|min_length[8]',
            'confirm_pass' => 'required|alpha_numeric|matches[password]',
        ]);
    
        // Either email or mobile_no should be provided
        $emailProvided = $this->request->getVar('email');
        $mobileNoProvided = $this->request->getVar('mobile_no');
        // echo "$mobileNoProvided";
    
        if (empty($emailProvided) && empty($mobileNoProvided)) {
            $validation->setError('email', 'Either Email or Mobile no is required.');
            $validation->setError('mobile_no', 'Either Email or Mobile no is required.');
        } else if (!empty($emailProvided) && !filter_var($emailProvided, FILTER_VALIDATE_EMAIL)) {
            $validation->setError('email', 'Invalid email format.');
        }
    
        if ($validation->withRequest($this->request)->run()) {
         
            $data = [
                'full_name' => $this->request->getVar('full_name'),
                'email' => $emailProvided,
                'mobile_no' => $mobileNoProvided,
                'role' => 'Student',
                'password' => $this->request->getVar('password'),
                'confirm_pass' => $this->request->getVar('confirm_pass'),
                'is_register_done' => 'Y',
                'course'=>$this->request->getVar('course'),
                'sub_course'=>$this->request->getVar('sub_course'),
                'age'=>$this->request->getVar('age'),
                'experienceInput'=>$this->request->getVar('experienceInput'),

            ];
        //   echo "<pre>";print_r($data);exit();
            // Save data to the database
            $loginModel->insert($data);
             $last_insert_id = $this->db->insertID();
             $getdata = [
                'full_name' => $this->request->getVar('full_name'),
                'email' => $emailProvided,
                'mobile_no' => $mobileNoProvided,
                'role' => 'Student',
                'password' => $this->request->getVar('password'),
                'confirm_pass' => $this->request->getVar('confirm_pass'),
                'register_id' => $last_insert_id,
                'is_register_done' => 'Y',
                'course'=>$this->request->getVar('course'),
                'sub_course'=>$this->request->getVar('sub_course'),
                'age'=>$this->request->getVar('age'),
                'experienceInput'=>$this->request->getVar('experienceInput'),
                
            ];
            // Set session variables and redirect as needed
            $this->session->set('user_id', $this->request->getVar($last_insert_id));
            $this->session->set('username', $this->request->getVar('full_name'));
            $this->session->set('email', $emailProvided);
            $this->session->set('role','Student');
    
            $loginModel->setFacultyName($data);
            $loginModel->setStudentName($getdata);
    
            return redirect()->to('dashboard');
        } else {
            // Validation failed
            $data['validation'] = $validation;
            return redirect()->to('Home');
        }
    }
    
    // public function login()
    // {
    //     $rules = [
           
    //         'email'    => 'required',
    //         'password'  => 'required',
           
    //     ];

    //     if($this->validate($rules)){
    //         $data = [
                
    //             'email'  => $this->request->getVar('email'),
    //             'password'  => $this->request->getVar('password'),
                
    //         ];
    //         // echo "Inside iff";
            
    //         return redirect()->to('dashboard');
    //     }else{
    //         // echo "Inside else";
    //         $data['validation'] = $this->validator;
    //         echo view('home', $data);
    //     }
    // }

    public function checkLoginDetails()
    {
         $request = \Config\Services::request();
         $loginModel = new LoginModel();

         $username = $request->getPost('username');
         $password = $request->getPost('password');

         if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
         $result = $loginModel->getUserByEmailAndPassword($username, $password);
          } else {
      
        $result = $loginModel->getUserByMobileNoAndPassword($username, $password);
        }

        if (!empty($result)) {
        switch ($result['role']) {
            case 'Admin':
                return redirect()->to('today');
            case 'Faculty':
                $this->session->set($result);
                return redirect()->to('FacultyDashboard');
            case 'Student':
                $this->session->set($result);
                return redirect()->to('uploadMedia');
            default:
                return redirect()->to('Home');
           }
           } else {
           return redirect()->to('Home');
         }
     }
      
      public function ModelForLogin()
     {
       return view('ModelForLogin');
     }
  
   public function logout(){
  //   print_r($_SESSION);die;
    session()->destroy();
    return redirect()->to(base_url());
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

	 if($this->request->getVar('id') == ""){
	
		$add_data = $db->table('tbl_tax');
		$add_data->insert($data);
	}else{
		$update_data = $db->table('register')->where('id',$this->request->getVar('id'));
		$update_data->update($data);

        $update_studentdata = $db->table('student')->where('register_id',$this->request->getVar('id'));
		$update_studentdata->update($studentdata);
	}	
		return redirect()->to('profilemanagment'); 

	}

    

}