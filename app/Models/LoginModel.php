<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{

    protected $table = 'register';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'email', 'mobile_no', 'role', 'password', 'confirm_pass', 'otp', 'emailotp', 'is_register_done', 'course', 'sub_course', 'age', 'experience', 'experienceInput','Phone_countryCode','mobileWithCode'];

    public function insertTable1Data($registerData)
    {

        $this->db->table('register')->insert($registerData);
        $insertedID = $this->db->insertID(); // Get the ID of the inserted row

        return $this->db->table('register')->where('id', $insertedID)->get()->getRowArray();
    }

    public function setFacultyName($data)
    {
        $faculty_name = array('faculty_name' => $data['full_name'], 'email' => $data['email']);
        // print_r($faculty_name);die;
        $facultyData = [
            'faculty_name'   => $faculty_name['faculty_name'],
            'email'          => $faculty_name['email'],
        ];
        if ($data['role'] == 'Faculty') {

            $res1 = $this->db->table('faculty')->insert($facultyData);

            if ($res1 == 1) {
                echo "name and email inserted in faculty successfully";
            } else {
                echo "error while inserting in faculty table";
            }
        }
    }

    public function getProfile($data)
    {
        //  print_r($data);
        $db      = \Config\Database::connect();
        if ($data['role'] == 'Faculty') {

            $builder = $db->table('faculty');
            $builder->select('faculty_name');       // names of your columns, single string, separated by a comma
            $builder->where('register_id', $data['username']);                // where clause
            $query = $builder->get();
            $result = $query->getRow();
            if ($result == 1) {
                echo "true";
            } else {
                echo "false";
            }
        }
    }

    public function setStudentName($getdata)
    {
        $result = $this->db->table('student')->insert($getdata);

        if ($result == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function set_register_id($data)
    {
        // print_r($data);die;
        $faculty_email = array('faculty_email' => $data['email']);
        $db      = \Config\Database::connect();

        // getting id from session data - username and storing in session
        $builder = $db->table('register');
        $builder->select('id');       // names of your columns, single string, separated by a comma
        $builder->where('email', $data['email']);                // where clause
        $query = $builder->get();
        $result1 = $query->getRow();
        if ($result1) {
            //   print_r($result1);
            $builder = $db->table('faculty');
            $builder->set('register_id', $result1->id);
            $builder->where('email', $faculty_email);
            $res = $builder->update();
            if ($res) {
                echo "register id inserted in faculty";
            } else {
                echo " Error in register id insertion in faculty";
            }
        } else {
            echo "Not getting register id";
        }
        // getting id from faculty name and storing in session
        $builder = $db->table('faculty');
        $builder->select('faculty_id');       // names of your columns, single string, separated by a comma
        $builder->where('email', $faculty_email);                // where clause
        $query = $builder->get();
        $result = $query->getRow();
        if ($result) {
            echo "true";
            $fac_id = $result->faculty_id;
            // print_r($fac_id);die;
            $session = session();
            $session->set('faculty_id', $fac_id);
        } else {
            echo "false";
        }
        // print_r($session->get('faculty_id'));   
    }

    public function getProfileName()
    {
    }

    public function addStudent($data)
    {
        // print_r($data);die;
        $student_email = array('student_email' => $data['email']);
        // $faculty_email=array('faculty_email'=>$data['email']);
        $db      = \Config\Database::connect();

        // getting id from session data - username and storing in session
        $builder = $db->table('register');
        $builder->select('id');
        $builder->where('email', $data['email']);
        $query = $builder->get();
        $result1 = $query->getRow();
        if ($result1) {
            //    print_r($result1);
            $builder = $db->table('student');
            $builder->set('register_id', $result1->id);
            $builder->where('email', $student_email);
            $res = $builder->update();

            if ($res) {
                echo "register id inserted in student";
            } else {
                echo " Error in register id insertion in student";
            }
        } else {
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
        if ($result) {
            echo "true";
            $stud_id = $result->student_id;
            // print_r($fac_id);die;
            $session = session();
            $session->set('student_id', $stud_id);
        } else {
            echo "false";
        }
        // print_r($session->get('faculty_id'));   
    }

    public function editFaculty($data)
    {

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


    public function add($data)
    {
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
    public function getUserByEmailAndPassword($email, $password)
    {
        $session = session();
        $result = $this->db
            ->table('register')
            ->where(["email" => $email, "password" => $password])
            ->get()
            ->getRow();

        if ($result) {
            $sessiondata = [
                'id'                 => $result->id,
                'role'               => $result->role,
                'email'              => $result->email,
                'password'           => $result->password,
                'cpassword'          => $result->confirm_pass,
                'user_name'          => $result->full_name,
                'mobile_no'          => $result->mobile_no,
                'country'            => $result->country,
                'Assign_Techer_id'   => $result->Assign_Techer_id,
                'SessionType'        => $result->SessionType,
                'Payment_status'     => $result->Payment_status,
                'access_level'       => $result->access_level,
                'is_logged_in'       => 'Y',
                'SessionsCount'      =>$result->SessionsCount,
                'mobileWithCode'     =>$result->mobileWithCode,
            ];

            $session->set('sessiondata', $sessiondata);
            return $sessiondata;
        } else {
            return null;
        }
    }

    public function getUserByMobileNoAndPassword($mobile_no, $password)
    {
        $session = session();
        $result = $this->db
            ->table('register')
            ->where(["mobile_no" => $mobile_no, "password" => $password])
            ->get()
            ->getRow();

        if ($result) {
            $sessiondata = [
                'id'                 => $result->id,
                'role'               => $result->role,
                'email'              => $result->email,
                'password'           => $result->password,
                'cpassword'          => $result->confirm_pass,
                'user_name'          => $result->full_name,
                'mobile_no'          => $result->mobile_no,
                'country'            => $result->country,
                'Assign_Techer_id'   => $result->Assign_Techer_id,
                'SessionType'        => $result->SessionType,
                'Payment_status'     => $result->Payment_status,
                'access_level'       => $result->access_level,
                'SessionsCount'      =>$result->SessionsCount,
                'is_logged_in'       => 'Y',
            ];


            $session->set('sessiondata', $sessiondata);
            return $sessiondata;
        } else {
            return null; // Indicates user not found
        }
    }

    public function getStudentList()
    {
        $session = session();

        $sessiondata = $session->get('sessiondata');
        // print_r($sessiondata['id']);
        $result1 = $this->db
            ->table('faculty')
            ->where(["register_id" => $sessiondata['id']])
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

    public function get_user_data($id)
    {
        $result = $this->db
            ->table('register')
            ->where(["id" => $id])
            ->get()
            ->getRow();

        return $result;
    }
    public function getmeetinglink($user_id)
    {
        $result = $this->db
            ->table('tbl_student_shedule')
            ->where(["student_id" => $user_id])
            ->get()
            ->getRow();

        return $result;
    }
    public function getmeetinglinktecher($teacherId)
    {
        $result = $this->db
            ->table('tbl_student_shedule')
            ->where(["faculty_id" => $teacherId])
            ->get()
            ->getRow();

        return $result;
    }

    public function checkStudentPaymentStatus($studentId)
    {
        $result = $this->db
            ->table('register')
            ->select('Payment_status')
            ->where(['id' => $studentId, 'Payment_status' => 'Y'])
            ->get()
            ->getRow();
        return !empty($result);
    }



    // public function checkexist($value, $column) {
    //     $result = $this->db
    //     ->table('register')
    //     ->select($column)
    //     ->where([$column => ''.$value.''])
    //     ->get()->getRow();

    //     return !empty($result);
    // }
    // public function checkExist($value, $column, $table)
    // {
    //     $result = $this->db
    //         ->table($table)
    //         ->select($column)
    //         ->where([$column => '' . $value . ''])
    //         ->get()->getRow();

    //     return !empty($result);
    // }

    public function checkExist($value, $column, $table)
    {
        $result = $this->db
        ->table($table)
        ->select('id')
        ->where("email", $value)
        ->orWhere("mobile_no", $value)
        ->get()->getRow();

       return !empty($result);
    }



    public function check_otp($otp, $emailotp, $mobile_no, $email)
    {
        $result = $this->db
            ->table('register')
            ->select('otp, emailotp')
            ->where(['mobile_no' => $mobile_no])
            ->get()
            ->getRow();

        // if ($otp == $result->otp) {
        //     $updateData = [
        //         'is_mobile_verified' => 'Y'
        //     ];

        //     $this->db
        //         ->table('register')
        //         ->where(["mobile_no" => $mobile_no])
        //         ->set($updateData)
        //         ->update();

        //     $data1 = array(
        //         'msg' => 'Mobile verified',
        //         'status' => '200',
        //         'email' => $email  
        //     );

        // }else {
        //     $data1 = array(
        //         'msg' => 'Enter correct otp',
        //         'status' => '203'
        //     );

        // }

        if ($emailotp == $result->emailotp) {
            $this->db
                ->table('register')
                ->where(["mobile_no" => $mobile_no])
                ->set('is_email_verify', 'Y')
                ->update();

            $data2 = array(
                'msg' => 'Mobile verified',
                'status' => '200',
                'email' => $email
            );
        } else {
            $data2 = array(
                'msg' => 'Enter correct otp',
                'status' => '203'
            );
        }

        $result = array(
            // 'mobile' => $data1,
            'email' => $data2
        );
        return $result;
    }

    public function updateUserByEmail($email, $data)
    {
        //  print_r($data);die;

        return $this->db->table('register')
            ->select('*')->where('email', $email)->update($data);
    }
    public function getUserByEmail($email)
    {
        return $this->db->table('register')
            ->select('*')
            ->where('email', $email)
            ->get()
            ->getRowArray();
    }
    public function check_otpforwhatsups($otp, $mobile_no)
    {
        $result = $this->db
            ->table('register')
            ->select('otp')
            ->where(['mobile_no' => $mobile_no])
            ->get()
            ->getRow();

       

        if ($otp == $result->otp) {
            $this->db
                ->table('register')
                ->where(["mobile_no" => $mobile_no])
                ->set('is_mobile_verified', 'Y')
                ->update();

            $data2 = array(
                'msg' => 'Mobile verified',
                'status' => '201',
                'mobile_no' => $mobile_no
            );
        } else {
            $data2 = array(
                'msg' => 'Enter correct otp',
                'status' => '203'
            );
        }

        $result = array(
            'mobile' => $data2
        );
        return $result;
    }
}
