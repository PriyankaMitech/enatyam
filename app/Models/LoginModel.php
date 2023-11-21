<?php 
namespace App\Models;
use CodeIgniter\Model;
class LoginModel extends Model
{
  
    protected $table = 'register';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'email', 'mobile_no','role','password','confirm_pass','otp','is_register_done','course','sub_course','age','experience','experienceInput'];  
   
    public function insertTable1Data($registerData)  {

        $this->db->table('register')->insert($registerData);
        $insertedID = $this->db->insertID(); // Get the ID of the inserted row

        // Fetch the data by the inserted ID and return it
        return $this->db->table('register')->where('id', $insertedID)->get()->getRowArray();
    }

    public function setFacultyName($data){
        $faculty_name=array('faculty_name'=>$data['full_name'],'email'=>$data['email']);
        // print_r($faculty_name);die;
        $facultyData = [
       'faculty_name'   => $faculty_name['faculty_name'],
        'email'          => $faculty_name['email'],   
      ];
        if($data['role']=='Faculty'){

            $res1 = $this->db->table('faculty')->insert($facultyData);
        
        if($res1==1 ){
            echo "name and email inserted in faculty successfully";
        }
        else{
            echo "error while inserting in faculty table";
        }
        }
    }

    public function getProfile($data){
      //  print_r($data);
        $db      = \Config\Database::connect();
        if($data['role']=='Faculty'){

            $builder = $db->table('faculty');
            $builder->select('faculty_name');       // names of your columns, single string, separated by a comma
            $builder->where('register_id', $data['username']);                // where clause
            $query= $builder->get();
            $result = $query->getRow();
            if($result==1){
                echo "true";
            }
            else{
                echo "false";
            }
        }
    }

    public function setStudentName($getdata){
        // print_r($data);exit();
        // $student_name=array('student_name'=>$data['full_name']);
        $student_name=array('register_id'=>$getdata['register_id'],'student_name'=>$getdata['full_name'],'email'=>$getdata['email'], 'mobile_no'=>$getdata['mobile_no']);
        $studentData = [
            'student_name'   => $student_name['student_name'],
            'email'          => $student_name['email'], 
            'mobile_no'          => $student_name['mobile_no'], 
            'register_id'          => $student_name['register_id'], 
        ];
        if($getdata['role']=='Student'){
         

        // $res = $this->db->table('student')->insert($student_name, $data['full_name']);
        $res1 = $this->db->table('student')->insert($studentData);
       


        
        if($res1==1 ){
            echo "name and email inserted in student successfully";
        }
        else{
            echo "error in inserting in student table";
        }
        }

    }

    public function set_register_id($data){
        // print_r($data);die;
        $faculty_email=array('faculty_email'=>$data['email']);
        $db      = \Config\Database::connect();

        // getting id from session data - username and storing in session
        $builder = $db->table('register');
        $builder->select('id');       // names of your columns, single string, separated by a comma
        $builder->where('email', $data['email']);                // where clause
        $query= $builder->get();
        $result1 = $query->getRow();
        if($result1){
         //   print_r($result1);
            $builder = $db->table('faculty');
            $builder->set('register_id', $result1->id);
            $builder->where('email', $faculty_email);
            $res = $builder->update();
            if($res){
                echo "register id inserted in faculty";
            }
            else{
                echo " Error in register id insertion in faculty";
            }
        }
        else{
            echo "Not getting register id";
        }
        // getting id from faculty name and storing in session
        $builder = $db->table('faculty');
        $builder->select('faculty_id');       // names of your columns, single string, separated by a comma
        $builder->where('email', $faculty_email);                // where clause
        $query = $builder->get();
        $result = $query->getRow();
        if($result){
                echo"true";
                $fac_id = $result->faculty_id;
                // print_r($fac_id);die;
                $session = session();
                $session->set('faculty_id', $fac_id);
        }
        else{
                echo "false";
            }
            // print_r($session->get('faculty_id'));   
    }

    public function getProfileName(){

    }

    public function addStudent($data){
        // print_r($data);die;
        $student_email=array('student_email'=>$data['email']);
        // $faculty_email=array('faculty_email'=>$data['email']);
        $db      = \Config\Database::connect();

        // getting id from session data - username and storing in session
        $builder = $db->table('register');
        $builder->select('id');     
        $builder->where('email', $data['email']);              
        $query= $builder->get();
        $result1 = $query->getRow();
        if($result1){
        //    print_r($result1);
            $builder = $db->table('student');
            $builder->set('register_id', $result1->id);
            $builder->where('email', $student_email);
            $res = $builder->update();
          
            if($res){
                echo "register id inserted in student";
            }
            else{
                echo " Error in register id insertion in student";
            }
        }
        else{
            echo "Not getting register id";
        }

        // $res = $this->db->table('faculty')->insert($faculty_name, $data['full_name']);
        
            // echo "true";
                // getting id from faculty name and storing in session
            $db      = \Config\Database::connect();
            $builder = $db->table('student');
            $builder->select('student_id');       // names of your columns, single string, separated by a comma
            $builder->where('email', $student_email);                // where clause
            $query = $builder->get();
            $result = $query->getRow();
            if($result){
                echo"true";
                $stud_id = $result->student_id;
                // print_r($fac_id);die;
                $session = session();
                $session->set('student_id', $stud_id);
            }
            else{
                echo "false";
            }
            // print_r($session->get('faculty_id'));   
    }

    public function editFaculty($data){
      
        // print_r(($data['qualification']));
        $session = session();
        // print_r($session->get('faculty_id'));die;
        
        $faculty_data = [
            'qualification' => $data['qualification'],
            'experience'  => $data['experience'],
            'country'  => $data['country'],
            'convenient_time'  => $data['convenient_time'],
        ];
        $db  = \Config\Database::connect();
        $builder = $db->table('faculty');
        $builder->set('qualification', $data['qualification']);
        $builder->set('experience', $data['experience']);
        $builder->set('country', $data['country']);
        $builder->set('convenient_time', $data['convenient_time']);
        $builder->where('faculty_id', $session->get('faculty_id'));
        $builder->update();
        // $data['lastQuery'] = $this->db->getLastQuery();
        // print_r($data['lastQuery']);    

        // if ($result == '1') {
        // return view((FacultyDashboard));
        // }else {
        // return false;
        // }

    }


    public function add($data){
        // $email = $this->session->get('email');
        //    $username =  $this->session->get('username');
        // print_r($email);die;
        $result = $this->db
        ->table('register')
        ->where(["email" => $data['email']])
        ->get()
        ->getRow();
        // print_r($result);die;

    }
    public function getUserByEmailAndPassword($email, $password) {
        $session = session();
        $result = $this->db
            ->table('register')
            ->where(["email" => $email, "password" => $password])
            ->get()
            ->getRow();

        if($result) {
            $sessiondata = [
                'id'                 => $result->id,
                'role'               => $result->role,
                'email'              => $result->email,
                'password'           => $result->password,
                'cpassword'          => $result->confirm_pass,
                'user_name'          => $result->full_name,
                'mobile_no'          => $result->mobile_no,
                'Payment_status'     => $result->Payment_status,
            ];

            $session->set('sessiondata', $sessiondata); 
            return $sessiondata;
        } else {
            return null;
        }
    }

    public function getUserByMobileNoAndPassword($mobile_no, $password){
        $session = session();
        $result = $this->db
            ->table('register')
            ->where(["mobile_no" => $mobile_no, "password" => $password])
            ->get()
            ->getRow();

        if($result) {
            $sessiondata = [
                'id'                 => $result->id,
                'role'               => $result->role,
                'email'              => $result->email,
                'password'           => $result->password,
                'cpassword'          => $result->confirm_pass,
                'user_name'          => $result->full_name,
                'mobile_no'          => $result->mobile_no,
                'Payment_status'     => $result->Payment_status,
            ];
        

            $session->set('sessiondata', $sessiondata); 
            return $sessiondata;
        } else {
            return null; // Indicates user not found
        }
    }

    public function getStudentList(){
        $session = session();
    
        $sessiondata= $session->get('sessiondata');
        // print_r($sessiondata['id']);
        $result1 = $this->db
                        ->table('faculty')
                        ->where([ "register_id" => $sessiondata['id']])
                        ->get()
                        ->getRow();
        // print_r($result->faculty_id);
        $session->set('faculty_id', $result1->faculty_id);
        // echo " Faculty id :" .$session->get('faculty_id');
        $result = $this->db
                    ->table('student')
                    ->where(["fk_faculty_id" => $session->get('faculty_id')])
                    ->get()
                    ->getResult();
        //    echo "<pre>"; print_r($result);
        return $result;
    }

    public function get_user_data($id){
        $result = $this->db
                        ->table('register')
                        ->where(["id" => $id])
                        ->get()
                        ->getRow();

                        return $result; 

    }

    public function checkStudentPaymentStatus($studentId){
        $result = $this->db
        ->table('register')
        ->select('Payment_status')
        ->where(['id' => $studentId, 'Payment_status' => 'Y'])
        ->get()
        ->getRow();
        return !empty($result);
    }

    public function get_user_Session($user_id){
        
        return $this->db->table('register')->select('SessionsCount')->where('id', $user_id)->get()->getRow();
     }

    public function checkexist($value, $column) {
        $result = $this->db
        ->table('register')
        ->select($column)
        ->where([$column => ''.$value.''])
        ->get()->getRow();
        
        return !empty($result);
    }

    public function check_otp($otp, $mobile_no, $email) {
        $result = $this->db
            ->table('register')
            ->select('otp')
            ->where(['mobile_no' => $mobile_no])
            ->get()
            ->getRow();
    
        if ($otp == $result->otp) {
            $updateData = [
                'is_mobile_verified' => 'Y'
            ];
    
            $this->db
                ->table('register')
                ->where(["mobile_no" => $mobile_no])
                ->set($updateData)
                ->update();
    
            $data = array(
                'msg' => 'Email verified',
                'status' => '200',
                'email' => $email  
            );
    
            return $data;
        } else {
            $data = array(
                'msg' => 'Enter correct otp',
                'status' => '203'
            );
    
            return $data;
        }
    }
    public function updateUserByEmail($email, $data)
    {
     //  print_r($data);die;
      
        return $this->db->table('register')
        ->select('*')->where('email', $email)->update($data);
   
    }
}