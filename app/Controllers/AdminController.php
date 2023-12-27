<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CarrierModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;

use CodeIgniter\HTTP\Request;

helper('sms_helper');
class AdminController extends BaseController
{
    public function givestudent()
    {
        return view('givestudent');
    }

    public function Admindashboard()
    {

        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $model = new AdminModel();
                $data['records'] = $model->getTodayRecords();
                $data['SessionData'] = $model->findAll();
                $data['count'] = $model->getRowCount();

                $data['students'] = $model->get_students();
                $data['Faculty'] = $model->getFacultyWithCarrier();
                $data['ConductedDemo'] = $model->getConductedDemo();
                $data['PendingDemo'] = $model->getPendingDemo();
                $data['ConductedDemoStatus'] = $model->getConductedDemoStatus();
                $data['getPaymentstatus'] = $model->Paymentstatus();
                $data['getAllDemoList'] = $model->getAllDemoData();
                $data['UnattendedDemoList'] = $model->UnattendedDemoList();
                $data['Facultydatails'] = $model->getFaculty();
              //   echo '<pre>';print_r($data['PendingDemo']);die;
                return view('AdminDashboard', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    public function AssignTecherForDemo()
    {
         
        $model = new AdminModel();
        $postData = $this->request->getPost();
        $model->edit($postData);
        return redirect()->to('Admindashboard');
    }


    public function AssignTecherToStudent()
    {
        $model = new AdminModel();

        if ($this->request->getMethod() === 'post') {
            $postData = $this->request->getPost();

            // echo "<pre>";print_r($postData);exit();

            $result = $model->add($postData);

            if ($result) {

                return redirect()->to('Admindashboard'); // Change 'success' to your desired URL
            } else {

                return redirect()->to('error'); // Change 'error' to your error handling URL
            }
        }
    }

    public function getAdminSideBarAll()
    {

        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {

                $model = new AdminModel();
                $data['facultyData'] = $model->getFacultyData();
                return view('AdminSideBar/FacultyProfile', $data);
                // return redirect()->to('AdminSideBar/FacultyProfile', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }
    public function studentProfiledata()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $model = new AdminModel();
                $data['student_data'] = $model->getStudentData();
                return view('AdminSideBar/StudentProfile', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    public function UplodedvideoByStudent()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $model = new AdminModel();
                $data['studentList'] = $model->getStudentData();
                $data['facultyList'] = $model->getFacultyrole();
                // Retrieve data without filtering (assuming your method accepts parameters)
                $data['studentVideoData'] = $model->getStudyVideoUplodedByStudent();
                $data['FacultyVideoData'] = $model->getStudyVideoUplodedByFaculty();

                // echo'<pre>';print_r($data['FacultyVideoData']);die;

                // Retrieve filtered data from session flash
                $filteredFacultyVideoData = session()->getFlashdata('filteredFacultyVideoData');

                // Merge filtered data with existing FacultyVideoData
                if (!empty($filteredFacultyVideoData)) {
                    $data['FacultyVideoData'] = array_merge($data['FacultyVideoData'], $filteredFacultyVideoData);
                }

                // echo "<pre>";
                // print_r($data['FacultyVideoData']);
                // exit();
                return view('AdminSideBar/StudentVideo', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    public function UploadedImages()
    {

        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {

                $model = new AdminModel();
                $data['studentVideoData'] = $model->getStudyVideoUplodedByStudent();
                $data['FacultyVideoData'] = $model->getStudyVideoUplodedByFaculty();
                // echo "<pre>";
                // print_r($data['FacultyVideoData']);
                // echo "</pre>";
                // die();
                return view('AdminSideBar/UploadedImages', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    // public function searchFacultyVideos()
    // {
    //     $startDate = $this->request->getPost('startDate');
    //     $endDate = $this->request->getPost('endDate');
    //     $studentName = $this->request->getPost('studentName');
    //     $facultyName = $this->request->getPost('facultyName');
    //     // print_r($endDate);
    //     // die;
    //     $sDate = $this->session->setFlashdata('startDate', $startDate);
    //     $eDate = $this->session->setFlashdata('endDate', $endDate);
    //     $studeName = $this->session->setFlashdata('studentName', $studentName);
    //     $facName =  $this->session->setFlashdata('facultyName', $facultyName);


    //     $model = new AdminModel();

    //     $data['searchdata'] = $model->getFacultyBySearch($startDate, $endDate, $studentName, $facultyName);
    //     $data['studentList'] = $model->getStudentData();
    //     $data['facultyList'] = $model->getFacultyrole();
    //     // echo '<pre>';
    //     // print_r($data['searchdata']);
    //     // die;
    //     // return $this->response->setJSON($filteredFacultyVideoData);
    //     return view('AdminSideBar/StudentVideo', $data);
    // }

    public function getSearchData()
    {
        $studentVideoStartDate = $this->request->getPost('startDate');
        $studentVideoEndDate = $this->request->getPost('endDate');
        $studentNames = $this->request->getPost('studentName');
        $facultyNames = $this->request->getPost('facultyName');
        $table = $this->request->getPost('table');

        $sDate = $this->session->setFlashdata('startDate', $studentVideoStartDate);
        $eDate = $this->session->setFlashdata('endDate', $studentVideoEndDate);
        $studeName = $this->session->setFlashdata('studentName', $studentNames);
        $facName =  $this->session->setFlashdata('facultyName', $facultyNames);

        $model = new AdminModel();
        // print_r($_POST);die;
        // $data['searchStudentData'] = $model->getStudentBySearch($studentVideoStartDate, $studentVideoEndDate, $studentNames, $facultyNames);
        $data['searchStudentData'] = $model->getSearchData($table, $studentVideoStartDate, $studentVideoEndDate, $studentNames, $facultyNames);
        $data['studentList'] = $model->getStudentData();
        $data['facultyList'] = $model->getFacultyrole();
        // echo '<pre>';
        // print_r($data['searchStudentData']);
        // die;
        if ($data['searchStudentData']) {
            return $this->response->setJSON($data);
        }else {
            $data['status'] = '203';
            return $this->response->setJSON($data);
        }
        
        // return view('AdminSideBar/StudentVideo', $data);
    }
    public function getDemoDetails()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $model = new AdminModel();

                $data['ConductedDemo'] = $model->getConductedDemo();
                $data['PendingDemo'] = $model->getPendingDemoList();
                $data['resheduleDemo'] = $model->getresheduleDemo();
                $data['Faculty'] = $model->getFaculty();

                return view('AdminSideBar/Demo', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    public function GetClasses()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $model = new AdminModel();


                $data['StudentList'] = $model->getStudents();
                $data['facultyList'] = $model->getFacultyrole();

                // print_r($data['facultyList']);die;
                return view('AdminSideBar/DailyClass', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    public function getTeachersByStudent()
    {
        $studentId = $this->request->getPost('studentId');
        $model = new AdminModel();
        $teachers = $model->getTeachersByStudent($studentId);
        return $this->response->setJSON($teachers);
    }

    public function processSelection()
    {
        $studentId = $this->request->getPost('studentId');
        $teacherId = $this->request->getPost('teacherId');
        $model = new AdminModel();
        $result = $model->getStudentAndTeacherData($studentId, $teacherId);
        return $this->response->setJSON($result);
    }

    public function NewFacultyApplication()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];
            $model = new AdminModel();
            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {


                $allCareerData = $model->getcarreerBookByfaculty();
                $filteredCareerData = array_filter($allCareerData, function ($careerRecord) {
                    return $careerRecord->Result_of_application === 'Pending';
                });
                $data['carrer'] = $filteredCareerData;
                $data['cansalList'] = $model->getrejectedList();
                $data['createPassword'] = $model->getNullPasswordRecords();
        //          echo '<pre>';
        // print_r($data['cansalList']);
        // die;
                return view('AdminSideBar/NewFacultyApplication', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }



    public function Steusupdate()
    {
        $action = $this->request->getPost('action');
        $D_id = $this->request->getPost('D_id');

        if ($D_id && ($action === 'approve' || $action === 'decline')) {
            $model = new CarrierModel();
            $careerRecord = $model->getcarreerByfaculty($D_id);

            if ($careerRecord) {
                $data = [
                    'Result_of_application' => $action,
                    'Status' => 'N',
                ];

                $model->update($D_id, $data);

                if ($action === 'approve') {
                    //                 // Your "approve" logic here
                    $model2 = new LoginModel();
                    $lastUpdatedCareerData = $model->getresultofResultofapplication($D_id);

                    if ($lastUpdatedCareerData) {
                        $registerData = [
                            'full_name' => $lastUpdatedCareerData['name'],
                            'email' => $lastUpdatedCareerData['email'],
                            'is_register_done' => 'Y',
                            'role' => 'Faculty',
                            'carrier_id' =>  $D_id,
                        ];

                        $lastInsertedData = $model2->insertTable1Data($registerData);

                        $lastInsertedData = [
                            'faculty_name' => $lastUpdatedCareerData['name'],
                            'email' => $lastUpdatedCareerData['email'],
                            'register_id' => $lastInsertedData['id'],
                            'carrier_id' =>  $D_id,

                        ];

                        $model->insertTable2Data($lastInsertedData);
                    }
                    // ...
                } elseif ($action === 'decline') {
                    // Your "decline" logic here
                    // ...
                }

                return redirect()->to('NewFacultyApplication');
            }
        }

        // Handle the case when $D_id or $action is not valid
        // Redirect or show an error message as needed
    }



    public function backtoApplication()
    {
        $action = $this->request->getPost('action');
        $D_id = $this->request->getPost('D_id');

        $model = new AdminModel();

        $result = $model->updateCarrierData($D_id, $action);
        return redirect()->to('NewFacultyApplication');
    }
    public function createpassword()
    {
        // print_r($_POST);die;

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $id = $this->request->getPost('id');
        $msg = 'Your password has been  updated. ';
        $Subject = 'Your Application Approved';
        $tital = 'congratulations You Are Selected';
        $model = new AdminModel();
        $result = $model->updatePassword($id, $password);
        if ($result) {
            //  print_r($password);die;
            sendConfirmationEmail($email, $password, $msg, $Subject, $tital);
            $this->session->setFlashdata('success', 'Password updated successfully.');
        } else {
            $this->session->setFlashdata('error', 'Error updating password. Please try again.');
        }
        return redirect()->to('NewFacultyApplication');
    }
    public function ResheduleByadmin()
{
    $email = $this->request->getPost('email');
    $AssignTecher_id = $this->request->getPost('AssignTecher_id');
    $date = $this->request->getPost('Reshedule_date');
    $time = $this->request->getPost('Reshedule_Time');
    $result = $this->request->getPost('http://localhost/enatyam/getDemoDetails#custom-tabs-four-profile');
    $D_id = $this->request->getPost('D_id');
    $model = new AdminModel();
    $registerRecord = $model->findname($AssignTecher_id);

    if (!empty($registerRecord)) {
        $firstRecord = reset($registerRecord);
        $ccEmails = [$firstRecord->email]; // Assuming you want to CC the faculty's email
        $result = $model->BackToprndinglistofdemo($D_id, $result, $date, $time);
        $Subject = 'Your Demo Rescheduled';
        $msg = "Your Demo Has Been Rescheduled - Date: $date, Time: $time";
        if ($result == 1) {
            // Pass $ccEmails to sendConfirmationEmail
            sendConfirmationEmail($email, $ccEmails, $Subject, $msg);
            $this->session->setFlashdata('success', 'Demo Rescheduled Successfully.');
        } else {
            $this->session->setFlashdata('error', 'Error Rescheduling Demo. Please try again.');
        }
    } else {
        $this->session->setFlashdata('error', 'Error fetching faculty details. Please try again.');
    }

    return redirect()->to('getDemoDetails');
}
    public function FacultysidebarShedule()
    {
        $model = new AdminModel();
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {


                $data['FacultysheduleData'] = $model->getFacultyShedule();
                // echo "<pre>";print_r($data['FacultysheduleData']);exit();

                return view('AdminSideBar/FacultysidebarShedule', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }

        $data['FacultysheduleData'] = $model->getFacultyShedule();

        return view('AdminSideBar/FacultysidebarShedule', $data);
    }
    public function getdate()
    {
        $model = new AdminModel();
        $date = $this->request->getPost('date');
        $tableHtml = ''; // Initialize an empty string to store the HTML table

        if ($date) {
            $dateData = $model->getdate($date);

            if (!empty($dateData)) {
                $tableHtml = '<div class="table-container"><table class="custom-table"><thead><tr><th>Sr.no</th><th>Date</th><th>Time</th></tr></thead><tbody>';

                foreach ($dateData as $data) {
                    $tableHtml .= '<tr><td>' . $data->faculty_id . '</td><td>' . $data->date . '</td><td>' . $data->time . '</td></tr>';
                }

                $tableHtml .= '</tbody></table></div>';
            }
        } else {
            $tableHtml = json_encode([]); // Return an empty JSON if there's no data
        }

        return $tableHtml;
    }

    public function getFacultyName_StudentVideo($faculty)
    {
        $db = \Config\Database::connect();
        // Assuming $faculty->Faculty_id contains the ID of the faculty member
        $register_id = $faculty->Faculty_id;

        $query = $db->table('register')
            ->select('full_name')
            ->where('id', $register_id)
            ->get();

        if ($query->getNumRows() > 0) {
            $row = $query->getRow();
            $full_name = $row->full_name;
            print_r($full_name);
            // Now $full_name contains the full name of the faculty member
        } else {
            // Handle the case where no matching record was found
        }
    }




    public function AdminList()
    {
        $model = new AdminModel();
        $adminUsers = $model->getAdminUsers();
        return view('AdminSideBar/AdminList', ['adminUsers' => $adminUsers]);
    }

    public function addStudent()
    {
        $email = $this->request->getPost('email');
        $model = new AdminModel();
        $studentData = $model->getStudentDataByEmail($email);

        if ($studentData) {
            $insertData = [
                'full_name' => $studentData->name,
                'email'     => $studentData->email,
                'role'      => 'Student',
                'is_register_done' => 'Y',
                'course'    => $studentData->course,
                'sub_course' => $studentData->sub_course,
            ];
            $model->AddStudentByAdmin($insertData);
            return redirect()->to('Admindashboard');
        }
    }

    public function create_group()
    {

        $model = new AdminModel();
        $data['groupSessionStudents'] = $model->getGroupSessionStudents();
        $data['OneToOneSession'] = $model->getOneToOneSessionStudents();
        $wherecond = array('is_deleted' => 'N');


        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);
        $data['faculty_data'] = $model->getalldata('faculty', $wherecond);


        return view('AdminSideBar/create_group', $data);
    }

    public function SelectedForGroup()
    {
        //  print_r($_POST);die;
        $groupName = $this->request->getPost('groupName');
        $selectedRowIds = $this->request->getPost('selectedRowIds');
        if (empty($selectedRowIds)) {
            echo 'No row IDs selected for update';
            return;
        }
        if (is_array($selectedRowIds)) {
            $selectedRowIds = implode(',', $selectedRowIds);
        }
        $rowIdsArray = explode(',', $selectedRowIds);
        $model = new AdminModel();
        $model->updateGroupName($rowIdsArray, $groupName);
        return redirect()->to('StudentListToAdmin');
    }

    public function StudentGroups()
    {
        $model = new AdminModel();
        $data['groups'] = $model->getAllGroupNames();
        $data['cource'] = $model->getcorce();
        $data['sub_course'] = $model->getsubcorce();
        $data['Faculty'] = $model->getFaculty();
        $data['records'] = [];
        foreach ($data['groups'] as $group) {
            $groupName = $group['groupName'];
            $records = $model->getRecordsByGroupName($groupName);
            $data['records'][$groupName] = $records;
        }
        // echo "<pre>"; print_r($data['records']); echo "</pre>";die();

        return view('AdminSideBar/StudentGroup', $data);
    }
    public function AssignFacultyToGroup()
    {
        // print_r($_POST);die;
        $selectedDate = $this->request->getPost('selected_date');
        $groupName = $this->request->getPost('group_name');
        $facultyId = $this->request->getPost('faculty_id');
        //  print_r($groupName);die;
        $model = new AdminModel();
        $model->updateFacultyForGroup($groupName, $facultyId, $selectedDate);
        return redirect()->to('StudentGroups');
    }
    public function chatuser()
    {
        if (isset($_SESSION['sessiondata'])) {
            $model = new AdminModel();
            if ($_SESSION['sessiondata']['role'] == 'Admin') {
                $wherecond = array('is_register_done' => 'Y', 'Payment_status' => 'Y');
                $result['getuser'] = $model->getalldata('register', $wherecond);
            } else if ($_SESSION['sessiondata']['role'] == 'Faculty') {
                $wherecond = array('Assign_Techer_id' => $_SESSION['sessiondata']['id']);
                $result['getuser'] = $model->getalldata('register', $wherecond);
            } else if ($_SESSION['sessiondata']['role'] == 'Student') {
                $wherecond = array('id' => $_SESSION['sessiondata']['Assign_Techer_id']);
                $result['getuser'] = $model->chatfaculty('register', $wherecond);
                // print_r($result);die;
            }
            echo view('chatuser', $result);
        } else {
            echo view('/');
        }
    }

    public function singlechat()
    {
        if (isset($_SESSION['sessiondata'])) {
            $model = new AdminModel();
            $receiverid = $this->request->uri->getSegments(1);
            if ($_SESSION['sessiondata']['role'] == 'Admin') {
                $wherecond = array('is_register_done' => 'Y', 'Payment_status' => 'Y');
                $result['getuser'] = $model->getalldata('register', $wherecond);
            } else if ($_SESSION['sessiondata']['role'] == 'Faculty') {
                $wherecond = array('Assign_Techer_id' => $_SESSION['sessiondata']['id']);
                $result['getuser'] = $model->getalldata('register', $wherecond);
            } else if ($_SESSION['sessiondata']['role'] == 'Student') {
                $wherecond = array('register_id' => $_SESSION['sessiondata']['id']);
                $result['getuser'] = $model->getalldata('faculty', $wherecond);
            }
            $wherecond2 = array('sender_id' => $_SESSION['sessiondata']['id'], 'receiver_id' => $receiverid[1]);
            $wherecond3 = array('sender_id' => $receiverid[1], 'receiver_id' => $_SESSION['sessiondata']['id']);
            $result['chatdata'] = $model->getchat('online_chat', $_SESSION['sessiondata']['id'], $receiverid[1]);
            echo view('chatuser', $result);
        } else {
            return redirect()->to('/');
        }
    }

    public function chatwithstud()
    {
        $model = new AdminModel();

        $receiverid = $this->request->uri->getSegments(1);
        echo '<pre>';
        print_r($receiverid[1]);
        die;
        $wherecond = array('Assign_Techer_id' => $_SESSION['sessiondata']['id']);
        $wherecond1 = array('id' => $receiverid[1]);
        $wherecond2 = array('sender_id' => $_SESSION['id'], 'receiver_id' => $receiverid[1]);
        $wherecond3 = array('sender_id' => $receiverid[1], 'receiver_id' => $_SESSION['id']);

        $result['getdata'] = $model->getsinglerow('register', $wherecond1);
        $result['getstud'] = $model->getdata('register', $wherecond);
        $result['chatdata'] = $model->getchat('online_chat', $wherecond2, $wherecond3, $receiverid[1]);

        // echo '<pre>';print_r($result['getstud']);die;
        echo view('Chatuser', $result);
    }

    public function chatwithteacher()
    {
        $model = new AdminModel();
        if ($_SESSION['role'] == 'Faculty') {
            if (isset($_POST['studeid'])) {
                $wherecond = array('receiver_id' => $_POST['studeid']);
                $result['getstud'] = $model->getdata('online_chat', $wherecond);
                // echo '<pre>';print_r($result['getstud']);die;
                echo json_encode($result['getstud']);
            } else {
                $wherecond = array('Assign_Techer_id' => $_SESSION['id']);
                // $result['getstud'] = $model->getdata('register', $wherecond);
                $result['getchat'] = $model->getdata('register', $wherecond);
                // echo '<pre>';print_r($result['getchat']);die;
                echo view('FacultysideBar/Chatwithstud', $result);
            }
        } else {
            echo 'student';
        }
        // print_r($_SESSION);die;
        // $receiverid = $this->request->uri->getSegments(1);
        // $wherecond = array('Assign_Techer_id'=>$_SESSION['id']);
        // $wherecond1 = array('id'=>$_SESSION['id']);
        // $wherecond2 = array('sender_id'=>$_SESSION['id'], 'receiver_id'=>3);
        // $wherecond3 = array('sender_id'=>3, 'receiver_id'=>$_SESSION['id']);


        // $result['getdata'] = $model->getsinglerow('register', $wherecond1);
        // $result['getstud'] = $model->getdata('register', $wherecond);
        // $result['chatdata'] = $model->getchat('online_chat', $wherecond2, $wherecond3);

        // echo '<pre>';print_r($result);die;
        // echo view('FacultysideBar/Chatwithstud', $result);
    }

    public function insertChat()
    {
        $formdata = $_POST;
        $model = new AdminModel();
        $result = $model->insert_formdata('msg_id', 'online_chat', $formdata);
        echo json_encode($result);
    }

    public function studentAttendance()
    {
        $model = new AdminModel();
        $data['attendance'] = $model->fetchattandance();
        // print_r($data['attendance']);die;
        return view('AdminSideBar/studentAttendance', $data);
    }
    public function add_notifications()
    {
        $model = new AdminModel();
        $data['admins'] = $model->get_students();
        $data['Faculty'] = $model->getFaculty();
        echo view('AdminSideBar/add_notifications', $data);
    }


    public function add_courses()
    {

        echo view('add_courses');
    }

    public function set_courses()
    {

        $data = [
            'courses_name' => $this->request->getVar('courses_name'),
            'created_on' => date('Y:m:d H:i:s'),
        ];

        $db = \Config\Database::Connect();
        if ($this->request->getVar('id') == "") {
            $add_data = $db->table('tbl_courses');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');
        } else {
            $update_data = $db->table('tbl_courses')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Data updated successfully.');
        }

        return redirect()->to('courses_list');
    }

    public function courses_list()
    {
        $model = new AdminModel();

        $wherecond = array('is_deleted' => 'N');


        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);
        // echo "<pre>";print_r($data['menu_data']);exit();
        echo view('courses_list', $data);
    }

    public function get_courses()
    {

        $model = new AdminModel();

        $courses_id = $this->request->uri->getSegments(1);

        $wherecond1 = array('is_deleted' => 'N', 'id' => $courses_id[1]);

        $data['single_data'] = $model->get_single_data('tbl_courses', $wherecond1);

        echo view('add_courses', $data);
    }


    public function chechk_courses_name_id()
    {
        $admin_model = new AdminModel();
        $courses_name = $this->request->getPost('courses_name');

        if ($courses_name) {
            $wherecond = array('courses_name' => $courses_name);

            $coursesname = $admin_model->getsinglerow('tbl_courses', $wherecond);
            // echo "<pre>";
            // print_r($email);exit();
            return json_encode($coursesname);
        }
    }


    public function add_sub_courses()
    {
        $admin_model = new AdminModel();
        $wherecond = array('is_deleted' => 'N');

        $data['courses_data'] = $admin_model->getalldata('tbl_courses', $wherecond);

        // echo "<pre>";print_r($coursesname);exit();

        echo view('add_sub_courses', $data);
    }

    public function set_sub_courses()
    {

        $data = [
            'courses_id' => $this->request->getVar('courses_id'),

            'sub_courses_name' => $this->request->getVar('sub_courses_name'),
            'created_on' => date('Y:m:d H:i:s'),
        ];

        $db = \Config\Database::Connect();
        if ($this->request->getVar('id') == "") {
            $add_data = $db->table('tbl_sub_courses');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');
        } else {
            $update_data = $db->table('tbl_sub_courses')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Data updated successfully.');
        }

        return redirect()->to('sub_courses_list');
    }

    public function sub_courses_list()
    {
        $model = new AdminModel();

        $wherecond = array('is_deleted' => 'N');


        $data['sub_courses_data'] = $model->getalldata('tbl_sub_courses', $wherecond);
        // echo "<pre>";print_r($data['menu_data']);exit();
        echo view('sub_courses_list', $data);
    }

    public function get_sub_courses()
    {

        $model = new AdminModel();

        $sub_courses_id = $this->request->uri->getSegments(1);

        $wherecond1 = array('is_deleted' => 'N', 'id' => $sub_courses_id[1]);
        $wherecond = array('is_deleted' => 'N');


        $data['single_data'] = $model->get_single_data('tbl_sub_courses', $wherecond1);
        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);



        echo view('add_sub_courses', $data);
    }


    public function chechk_sub_courses_name_id()
    {
        $admin_model = new AdminModel();
        $sub_courses_name = $this->request->getPost('sub_courses_name');
        $courses_id = $this->request->getPost('courses_id');

        if ($sub_courses_name && $courses_id) {
            $sub_courses_data = $admin_model->chechk_sub_courses_name_id($courses_id, $sub_courses_name);

            if ($sub_courses_data) {
                // Combination found, return 'false' to indicate non-uniqueness
                return json_encode($sub_courses_data);
            }
        }
    }



    public function chechk_courses_id_id()
    {
        $admin_model = new AdminModel();
        $courses_id = $this->request->getPost('courses_id');
        $sub_courses_name = $this->request->getPost('sub_courses_name');


        if ($courses_id) {

            $sub_coursesname = $admin_model->chechk_courses_id_id($courses_id, $sub_courses_name);
        
            return json_encode($sub_coursesname);
        }

    }



    public function add_menu()
    {

        echo view('add_menu');
    }



    public function set_menu()
    {

        $data = [
            'menu_name' => $this->request->getVar('menu_name'),
            'url_location' => $this->request->getVar('url_location'),
            'created_on' => date('Y:m:d H:i:s'),
        ];

        $db = \Config\Database::Connect();
        if ($this->request->getVar('id') == "") {
            $add_data = $db->table('tbl_menu');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');
        } else {
            $update_data = $db->table('tbl_menu')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Data updated successfully.');
        }

        return redirect()->to('menu_list');
    }



    public function menu_list()
    {
        $model = new AdminModel();

        $wherecond = array('is_deleted' => 'N');


        $data['menu_data'] = $model->getalldata('tbl_menu', $wherecond);
        // echo "<pre>";print_r($data['menu_data']);exit();
        echo view('menu_list', $data);
    }

    public function get_menu()
    {

        $model = new AdminModel();

        $menu_id = $this->request->uri->getSegments(1);

        $wherecond1 = array('is_deleted' => 'N', 'id' => $menu_id[1]);

        $data['single_data'] = $model->get_single_data('tbl_menu', $wherecond1);

        echo view('add_menu', $data);
    }




    public function delete()
    {

        $uri_data = $this->request->uri->getSegments(2);

        $id = base64_decode($uri_data[1]);
        $table = $uri_data[2];

        // echo "<pre>"; print_r($uri_data);
        // echo $table;
        // exit();

        // Update the database row with is_deleted = 1
        $data = ['is_deleted' => 'Y'];
        $db = \Config\Database::connect();


        $update_data = $db->table($table)->where('id', $id);
        $update_data->update($data);
        session()->setFlashdata('success', 'Data deleted successfully.');
        return redirect()->back();



        // Redirect or return a response as needed
    }


    public function add_new_user()
    {
        $model = new AdminModel();

        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {

                $wherecond = array('is_deleted' => 'N');


                $data['menu_data'] = $model->getalldata('tbl_menu', $wherecond);



                return view('add_user', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }


    public function AdduserByadmin()
    {

        $accessLevels = $this->request->getVar('access_level');

        // Convert the array of selected checkboxes to a comma-separated string
        $accessLevelString = implode(',', $accessLevels);
        $data = [
            'full_name' => $this->request->getVar('full_name'),
            'email' => $this->request->getPost('email'),
            'mobile_no' => $this->request->getPost('mobile_no'),
            'role' => 'sub_admin',
            'password' => $this->request->getPost('password'),
            'access_level' => $accessLevelString,
            'is_register_done' => 'Y',
            'created_on' => date('Y:m:d H:i:s'),
        ];

        $db = \Config\Database::Connect();
        if ($this->request->getVar('id') == "") {
            $add_data = $db->table('register');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');
        } else {
            $update_data = $db->table('register')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Data updated successfully.');
        }

        return redirect()->to('user_list');
    }

    public function user_list()
    {
        $model = new AdminModel();


        $wherecond = array('is_deleted' => 'N', 'role' => 'sub_admin');
        $data['user_data'] = $model->getalldata('register', $wherecond);

        // echo "<pre>";print_r($data['menu_data']);exit();
        echo view('user_list', $data);
    }

    public function update_access_token() {
        
    }

    public function get_user()
    {

        $model = new AdminModel();

        $menu_id = $this->request->uri->getSegments(1);
        $wherecond1 = array('is_deleted' => 'N', 'id' => $menu_id[1]);

        $wherecond = array('is_deleted' => 'N');

        $data['single_data'] = $model->get_single_data('register', $wherecond1);
        $data['menu_data'] = $model->getalldata('tbl_menu', $wherecond);



        echo view('add_user', $data);
    }
    public function get_sub_courses_data()
    {
        $model = new AdminModel();

        $courses_id_g = $this->request->getPost('courses_id_g');

        if ($courses_id_g) {
            $wherecond1 = array('is_deleted' => 'N', 'courses_id' => $courses_id_g);

            $sub_courses = $model->getalldata('tbl_sub_courses', $wherecond1);
            return json_encode($sub_courses);
        } else {
            return json_encode([]);
        }
    }


    public function get_student_data()
    {
        $model = new AdminModel();
    
        $sub_courses_id_g = $this->request->getPost('sub_courses_id_g');
        $courses_id_g = $this->request->getPost('courses_id_g');
        $GroupSession = 'GroupSession';
        $Payment_status = 'Y';


        $whereCondition = '';
            $whereCondition = ['is_deleted' => 'N', 'Assign_Techer_id' => NULL, 'Payment_status' =>  $Payment_status, 'SessionType' => $GroupSession, 'groupName' => NULL, 'course' => $courses_id_g, 'sub_course' => $sub_courses_id_g];


        $student_data = $model->getalldata('register', $whereCondition);
    
        return json_encode($student_data);
    }
    



    public function get_faculty_data()
    {
        $model = new AdminModel();

        $sub_courses_id_g = $this->request->getPost('sub_courses_id_g');
        $courses_id_g = $this->request->getPost('courses_id_g');

        if ($sub_courses_id_g) {
            // Assuming you have a "carrier" table
            $wherecond_carrier = array('sub_course' => $sub_courses_id_g, 'course' => $courses_id_g, 'Result_of_application' => 'approve');
            $faculty_data = $model->getalldata('carrier', $wherecond_carrier);



            return json_encode($faculty_data);
        } else {
            return json_encode([]);
        }
    }








    public function chechk_menu_name_id()
    {
        $admin_model = new AdminModel();
        $menu_name = $this->request->getPost('menu_name');

        if ($menu_name) {
            $wherecond = array('url_location' => $menu_name);


            $menuname = $admin_model->getsinglerow('tbl_menu', $wherecond);
            // echo "<pre>";
            // print_r($email);exit();
            return json_encode($menuname);
        } else {
            return json_encode([]);
        }
    }


    public function setnotification()
    {
        // $admin_id;
        if (!empty($_SESSION['sessiondata'])) {
            $admin_id = $_SESSION['sessiondata']['id'];
        }

        // echo "<pre>";
        // print_r($admin_id);
        // exit();


        $model = new AdminModel();
        $result = [
            'selected_faculty' => $this->request->getPost('selected_faculty'),
            'selected_students' => $this->request->getPost('selected_students'),
            'notification_description' => $this->request->getPost('notification_description'),
            'notification_date' =>  $this->request->getPost('notification_date'),
            'admin_id' => $admin_id,
            'created_on' => date('Y:m:d H:i:s'),
        ];

        // echo "<pre>";print_r($result);exit();

        $model->insertNotification($result);


        return redirect()->to('add_notifications');
    }

    public function viewProfile()
    {
        $model = new AdminModel();

        $uri = service('uri');

        // Get the second segment of the URI
        $profile_id = $uri->getSegment(2);


        $wherecond = array('D_id' => $profile_id);

        $data['profile_data'] = $model->getsinglerow1('carrier', $wherecond);

        // echo "<pre>";
        // print_r($data['profile_data']);
        // exit();

        return view('AdminSideBar/viewProfile', $data);
    }

    public function viewProfiledfaculty()
    {
        $model = new AdminModel();

        $uri = service('uri');

        // Get the second segment of the URI
        $profile_id = $uri->getSegment(2);


        $wherecond = array('D_id' => $profile_id);
// print_r($wherecond);die;
        $data['profile_data'] = $model->getsinglerow1('carrier', $wherecond);
        $data['faculty_slots'] = $model->getAllSlots($wherecond);
  //      echo "<pre>"; print_r($data['profile_data']);exit();

        return view('AdminSideBar/viewprofilefaculty', $data);
    }


    public function viewProfiles()
    {
        $model = new AdminModel();

        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $uri = service('uri');

                // Get the second segment of the URI
                $profile_id = $uri->getSegment(2);


                $wherecond = array('student_id ' => $profile_id);

                $data['profile_data'] = $model->getcorcessforstudentprofile('student', $wherecond);

    
                return view('AdminSideBar/viewProfiles', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    public function demo_classes()
    {
        $model = new AdminModel();
        $data['demo_list'] = $model->getAllDemoData();
        echo view('demo_list', $data);
    }

    public function student()
    {
        $model = new AdminModel();
        $data['student_list'] = $model->get_students();
        echo view('student_list', $data);
    }

    public function faculty()
    {
        $model = new AdminModel();
        $data['faculty_list'] = $model->getFaculty();
        echo view('faculty_list', $data);
    }

    public function payment_history()
    {
        $model = new AdminModel();
        $data['student_list'] = $model->get_students();
        //print_r($data['student_list']);die;
        echo view('payment_list', $data);
    }
    public function  fetch_records()
    {
        // print_r($_POST);die;
        $group = $this->request->getPost('group');
        $model = new AdminModel();
        $data['stdent_list'] = $model->studentsgroup($group);
        $data['facultyData'] = $model->getFaculty();
        return $this->response->setJSON($data);
    }
    public function fetch_groups_for_course()
    {
        $course = $this->request->getPost('course');
        $subcourse = $this->request->getPost('subcourse');
        $model = new AdminModel();
        $data['groups'] = $model->getGroupsForCourse($course, $subcourse);
        return $this->response->setJSON($data);
    }

    public function set_create_group_data()
    {


        $data = [
            'courses_id_g' => $this->request->getVar('courses_id_g'),
            'sub_courses_id_g' => $this->request->getVar('sub_courses_id_g'),
            'student_id' => implode(',', $this->request->getVar('student_id')), // Convert array to comma-separated string
            'group_name' => $this->request->getVar('group_name'),
            'faculty_id_g' => $this->request->getVar('faculty_id_g'),
            'session_start_date' => $this->request->getVar('session_start_date'),
            'created_on' => date('Y-m-d H:i:s'),
        ];

        $db = \Config\Database::Connect();

        // Update or insert data in 'tbl_group' table
        if ($this->request->getVar('id') == "") {
            $add_data = $db->table('tbl_group');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Data added successfully.');
        } else {
            $update_data = $db->table('tbl_group')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Data updated successfully.');
        }

        // Update data in 'register' table using student IDs
        if (!empty($this->request->getVar('student_id'))) {
            $registerUpdateData = [
                'Assign_Techer_id' => $this->request->getVar('faculty_id_g'),
                'groupName' => $this->request->getVar('group_name'),
            ];

            $studentIds = explode(',', $data['student_id']);
            foreach ($studentIds as $studentId) {
                $registerUpdate = $db->table('register')->where('id', $studentId);
                $registerUpdate->update($registerUpdateData);
            }
        }

        return redirect()->to('student_list_of_group');
    }


    public function student_list_of_group()
    {
        $model = new AdminModel();
        $wherecond = array('is_deleted' => 'N');


        $wherecond1 = array('is_deleted' => 'N');
        $orderByField = 'created_on';
        $orderByDirection = 'desc';

        $data['student_list_of_group'] = $model->getalldatadesc('tbl_group', $wherecond1, $orderByField, $orderByDirection);
        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);

        echo view('student_list_of_group', $data);
    }


    public function edit_group()
    {

        $model = new AdminModel();


        $wherecond = array('is_deleted' => 'N');




        $group_id = $this->request->uri->getSegments(1);

        $wherecond1 = array('is_deleted' => 'N', 'id' => $group_id[1]);

        $data['single_data'] = $model->get_single_data('tbl_group', $wherecond1);
        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);
        $data['faculty_data'] = $model->getalldata('faculty', $wherecond);



        return view('AdminSideBar/create_group', $data);
    }

    public function serch_data_of_group()
    {

        $model = new AdminModel();


        $courses_id_g = $this->request->getVar('courses_id_g');
        $sub_courses_id_g = $this->request->getVar('sub_courses_id_g');
        $wherecond1 = "";
        if ((!empty($courses_id_g)) && (!empty($sub_courses_id_g))) {
            $session = session();
            $session->set('courses_id_g', $courses_id_g);
            $session->set('sub_courses_id_g', $sub_courses_id_g);

            $wherecond1 = array('is_deleted' => 'N', 'courses_id_g' => $courses_id_g, 'sub_courses_id_g' => $sub_courses_id_g);
        }

        $orderByField = 'created_on';
        $orderByDirection = 'desc';



        $wherecond = array('is_deleted' => 'N');

        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);

        $data['group_data'] = $model->getalldatadesc('tbl_group', $wherecond1, $orderByField, $orderByDirection);


        return view('student_list_of_group', $data);
    }


public function get_shedule_data()
{
    $model = new AdminModel();

    $faculty_id_g = $this->request->getPost('faculty_id_g');


    if ($faculty_id_g) {
        $wherecond = array('carrier_id' => $faculty_id_g);


        $faculity_data = $model->getsinglerow('register', $wherecond);

        if(!empty($faculity_data)){
            $wherecond1 = array('student_register_id' => NULL, 'shedule_status' => 'N', 'faculty_register_id' => $faculity_data->id);
            $shedule_data = $model->getalldata('schedule', $wherecond1);
        }
        return json_encode($shedule_data);
    } else {
        return json_encode([]);
    }
}



  
  public function payments()
{
    if (isset($_SESSION['sessiondata'])) {
        $sessionData = $_SESSION['sessiondata'];

        $email = $sessionData['email'] ?? null;
        $password = $sessionData['password'] ?? null;
        $model = new AdminModel();
        if ($email !== null && $password !== null) {
            $data['payments'] = $model->getpaymentdata();
      //  echo'<pre>';print_r($data['payments'] );die;
           return view('AdminSideBar/payments',$data);
        }
        else {
            return redirect()->to(base_url());
        }
    }
}

}
