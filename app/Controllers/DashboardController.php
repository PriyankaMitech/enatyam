<?php

namespace App\Controllers;

use App\Models\LoginModel;

class DashboardController extends BaseController
{
    public function index()

    {
        echo "hiiii  Inside index" . $this->session->get('role');

        if ($this->session->get('role') == 'Admin') {
            return  redirect()->to('today');
        }
        if ($this->session->get('role') == 'Student') {
            // echo '<pre>'; print_r($this->session->get());die;
            $data =  $this->session->get();
            //    print_r($data);die;
            $loginModel = new LoginModel();
            // $loginModel->setFacultyName($data);
            //    $loginModel->set_register_id($data);
            //    $loginModel->addStudent($data);
            $student_id = $this->session->get('student_id');
            echo $student_id;
            // echo '<pre>'; print_r($this->session->all_userdata());
            return redirect()->to('StudentDashboard');
        }
        if ($this->session->get('role') == 'Faculty') {
            // echo '<pre>'; print_r($this->session->get());die;
            $data =  $this->session->get();
            //    print_r($data);die;
            $loginModel = new LoginModel();
            // $loginModel->setFacultyName($data);
            $loginModel->set_register_id($data); //inserting in faculty table
            $faculty_id = $this->session->get('faculty_id');
            echo $faculty_id;
            // echo '<pre>'; print_r($this->session->all_userdata());
            return redirect()->to('FacultyDashboard');
            // return  ('facultyProfile');
        }
    }

    public function insertProfile()
    {
        $db  = \Config\Database::connect();

        $qualification = $this->request->getPost('Faculty_Qualification');
        $experience = $this->request->getPost('Faculty_Experience');
        $country = $this->request->getPost('Faculty_Country');
        $availability = $this->request->getPost('Faculty_Availability');
        // $email = $this->request->getPost('Faculty_Email');

        $data = [
            'qualification' => $qualification,
            'experience' => $experience,
            'country'  => $country,
            'convenient_time' => $availability,
            // 'confirm_pass' => $email,
            // 'is_register_done' =>'Y'
        ];
        $loginModel = new LoginModel();
        $result = $loginModel->editFaculty($data);
        $data['lastQuery'] = $db->getLastQuery();
        //   print_r($data['lastQuery']);  
    }

    public function studentList()
    {
        // echo "in studentList";
        $session = session();
        //print_r($session->get());die;
        $loginModel = new LoginModel();
        $data['Studentdata'] =   $loginModel->getStudentList();
        //   print_r($Studentdata);die;
        return  view('faculty', $data);
    }

    public function displayDashboard()
    {
        $result = (session()->get('sessiondata'));
        // print_r($result['role']);
        // die;
        if ((session()->get('sessiondata'))) {
            if ($result['role'] == 'Admin') {
                return redirect()->to('today');
            } else if ($result['role'] == 'Faculty') {
                $this->session->set($result);
                return redirect()->to('FacultyDashboard');
            } else if ($result['role'] == 'Student') {
                $this->session->set($result);
                return redirect()->to('uploadMedia');
            }
        } else {
            return redirect()->to('Home');
        }
    }
}
