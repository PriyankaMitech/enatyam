<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CarrierModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;

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

                $data['admins'] = $model->getAdmins();
                $data['Faculty'] = $model->getFaculty();
                $data['ConductedDemo'] = $model->getConductedDemo();
                $data['PendingDemo'] = $model->getPendingDemo();
                $data['ConductedDemoStatus'] = $model->getConductedDemoStatus();
                $data['getPaymentstatus'] = $model->Paymentstatus();
                $data['getAllDemoList'] = $model->getAllDemoData();
                $data['UnattendedDemoList'] = $model->UnattendedDemoList();
                $data['Facultydatails'] = $model->getFaculty();
                //    echo "<pre>"; print_r($data['admins']);echo "</pre>"; die();
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


            $result = $model->add($postData);

            if ($result) {

                return redirect()->to('Admindashboard'); // Change 'success' to your desired URL
            } else {

                return redirect()->to('error'); // Change 'error' to your error handling URL
            }
        }
    }



    public function Getcalender()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {

                return view('AdminCalender');
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
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
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }
    public function StudentDate()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $model = new AdminModel();
                $data['facultyData'] = $model->getStudentData();
                return view('AdminSideBar/StudentProfile', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    // public function UplodedvideoByStudent()
    // {

    //     if (isset($_SESSION['sessiondata'])) {
    //         $sessionData = $_SESSION['sessiondata'];

    //         $email = $sessionData['email'] ?? null;
    //         $password = $sessionData['password'] ?? null;

    //         if ($email !== null && $password !== null) {

    //             $model = new AdminModel();
    //             $data['studentVideoData'] = $model->getStudeyVideoUplodeByStudent();
    //             $data['FacultyVideoData'] = $model->getStudeyVideoUplodeByFaculty();
    //             return view('AdminSideBar/StudentVideo', $data);
    //         } else {
    //             return redirect()->to(base_url());
    //         }
    //     } else {
    //         return redirect()->to(base_url());
    //     }
    // }
    public function UplodedvideoByStudent()
    {

        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {

                $model = new AdminModel();
                $data['studentVideoData'] = $model->getStudyVideoUplodedByStudent();
                $data['FacultyVideoData'] = $model->getStudyVideoUplodedByFaculty();
                // echo "<pre>"; print_r($data['FacultyVideoData']);echo "</pre>"; die();
                return view('AdminSideBar/StudentVideo', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
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
                return view('AdminSideBar/NewFacultyApplication', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    // public function Steusupdate()
    // {
    //     $action[] = $this->request->getPost('action');
    //     // print_r($action);
    //     // die;
    //     $D_id = $this->request->getPost('D_id');
    //     if ($D_id && ($action === 'approve' || $action === 'decline')) {
    //         $model = new CarrierModel();
    //         $careerRecord = $model->getcarreerByfaculty($D_id);

    //         if ($careerRecord) {

    //             $data = [
    //                 'Result_of_application' => $action,
    //                 'Status' => 'N',
    //             ];
    //             //  print_r($data);die;
    //             $model->update($D_id, $data);


    //             if ($action === 'approve') {
    //                 $model2 = new LoginModel();
    //                 $model = new CarrierModel();
    //                 $lastUpdatedCareerData = $model->getresultofResultofapplication($D_id);

    //                 if ($lastUpdatedCareerData) {

    //                     $registerData = [
    //                         'full_name' => $lastUpdatedCareerData['name'],
    //                         'email' => $lastUpdatedCareerData['email'],
    //                         'is_register_done' => 'Y',
    //                         'role' => 'Faculty',
    //                     ];

    //                     // $model2->insertTable1Data($registerData);

    //                     $lastInsertedData = $model2->insertTable1Data($registerData);
    //                     $lastInsertedData = [

    //                         'faculty_name' => $lastUpdatedCareerData['name'],
    //                         'email' => $lastUpdatedCareerData['email'],
    //                         'register_id' => $lastInsertedData['id'],
    //                     ];

    //                     //  print_r($lastInsertedData);die; 

    //                     $model->insertTable2Data($lastInsertedData);
    //                 }
    //             }

    //             return redirect()->to('NewFacultyApplication');
    //         }
    //     }
    // }
    // public function Steusupdate()
    // {
    //     $action = $this->request->getPost('action');

    //     $D_id = $this->request->getPost('D_id');

    //     if ($D_id && ($action === 'approve' || $action === 'decline')) {
    //         $model = new CarrierModel();
    //         $careerRecord = $model->getcarreerByfaculty($D_id);

    //         if ($careerRecord) {
    //             $data = [
    //                 'Result_of_application' => $action,
    //                 'Status' => 'N',
    //             ];

    //             $model->update($D_id, $data);

    //             if ($action === 'approve') {
    //                 $model2 = new LoginModel();
    //                 $lastUpdatedCareerData = $model->getresultofResultofapplication($D_id);

    //                 if ($lastUpdatedCareerData) {
    //                     $registerData = [
    //                         'full_name' => $lastUpdatedCareerData['name'],
    //                         'email' => $lastUpdatedCareerData['email'],
    //                         'is_register_done' => 'Y',
    //                         'role' => 'Faculty',
    //                     ];

    //                     $lastInsertedData = $model2->insertTable1Data($registerData);

    //                     $lastInsertedData = [
    //                         'faculty_name' => $lastUpdatedCareerData['name'],
    //                         'email' => $lastUpdatedCareerData['email'],
    //                         'register_id' => $lastInsertedData['id'],
    //                     ];

    //                     $model->insertTable2Data($lastInsertedData);
    //                 }
    //             }

    //             return redirect()->to('NewFacultyApplication');
    //         }
    //     }

    //     // Handle the case when $D_id or $action is not valid
    //     // Redirect or show an error message as needed
    // }

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
                        ];

                        $lastInsertedData = $model2->insertTable1Data($registerData);

                        $lastInsertedData = [
                            'faculty_name' => $lastUpdatedCareerData['name'],
                            'email' => $lastUpdatedCareerData['email'],
                            'register_id' => $lastInsertedData['id'],
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
        $password = $this->request->getPost('password');
        $id = $this->request->getPost('id');
        $model = new AdminModel();
        $result = $model->updatePassword($id, $password);

        return redirect()->to('NewFacultyApplication');
    }
    public function ResheduleByadmin()
    {
        //   print_r($_POST);die;
        $date = $this->request->getPost('Reshedule_date');
        $time = $this->request->getPost('Reshedule_Time');
        $result = $this->request->getPost('action');
        $D_id = $this->request->getPost('D_id');
        $model = new AdminModel();
        $result = $model->BackToprndinglistofdemo($D_id, $result, $date, $time);

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


    public function AdduserByadmin()
    {
        //  print_r($_POST);die;
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $mo_number = $this->request->getPost('password');
        //  print_r($email);die;
        $model = new AdminModel();
        $data = [
            'full_name' => $this->request->getVar('full_name'),
            'email' => $email,
            'mobile_no' => $mo_number,
            'role' => 'Admin',
            'password' => $password,
            'confirm_pass' => $password,
            'is_register_done' => 'Y',
        ];
        //print_r($data);die;
        $model->AddUserByAdmin($data);
        return redirect()->to('AddNewUser');
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

    public function StudentListToAdmin()
    {

        $model = new AdminModel();
        $data['groupSessionStudents'] = $model->getGroupSessionStudents();
        $data['OneToOneSession'] = $model->getOneToOneSessionStudents();

        return view('AdminSideBar/StudentList', $data);
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
        $groupName = $this->request->getPost('group');
        $facultyId = $this->request->getPost('faculty');
        $model = new AdminModel();
        $model->updateFacultyForGroup($groupName, $facultyId);
        return redirect()->to('StudentGroups');
    }

    public function chatwithstud()
    {
        $model = new AdminModel();
        print_r($_SESSION);die;
        $receiverid = $this->request->uri->getSegments(1);
        $wherecond = array('Assign_Techer_id' => $_SESSION['id']);
        $wherecond1 = array('id' => $receiverid[1]);
        $wherecond2 = array('sender_id' => $_SESSION['id'], 'receiver_id' => $receiverid[1]);
        $wherecond3 = array('sender_id' => $receiverid[1], 'receiver_id' => $_SESSION['id']);

        $result['getdata'] = $model->getsinglerow('register', $wherecond1);
        $result['getstud'] = $model->getdata('register', $wherecond);
        $result['chatdata'] = $model->getchat('online_chat', $wherecond2, $wherecond3, $receiverid[1]);

        // echo '<pre>';print_r($result['getstud']);die;
        echo view('FacultysideBar/Chatwithstud', $result);
    }

    public function chatwithteacher()
    {
        $model = new AdminModel();
        if ($_SESSION['role'] == 'Faculty') {
            if (isset($_POST['studeid'])) {
                $wherecond = array('receiver_id'=>$_POST['studeid']);
                $result['getstud'] = $model->getdata('online_chat', $wherecond);
                // echo '<pre>';print_r($result['getstud']);die;
                echo json_encode($result['getstud']);
            }else {
                $wherecond = array('Assign_Techer_id'=>$_SESSION['id']);
                // $result['getstud'] = $model->getdata('register', $wherecond);
                $result['getchat'] = $model->getdata('register', $wherecond);
                // echo '<pre>';print_r($result['getchat']);die;
                echo view('FacultysideBar/Chatwithstud', $result);
            }
            
        }else {
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

        // print_r($formdata);die;

        $model = new AdminModel();
        $result = $model->insert_formdata('msg_id', 'online_chat', $formdata);
        echo json_encode($result);
    }

    public function studentAttendance()
    {
        echo view('AdminSideBar/studentAttendance');
    }
    public function Notifications()
    {
        $model = new AdminModel();
        $data['admins'] = $model->getAdmins();
        $data['Faculty'] = $model->getFaculty();
        echo view('AdminSideBar/Notifications',$data);
    }
    public function SendNotifications()
    {
       // print_r($_POST);die;
       $selected_faculty = $this->request->getPost('selected_faculty');
       $selectedStudents = $this->request->getPost('selected_students');
       $notification_date =$this->request->getPost('notification_date');
       $notificationDescription = $this->request->getPost('notification_description');
       $model = new AdminModel(); 
       $result= [
        'selected_faculty' => $selected_faculty,
        'selected_students' => $selectedStudents, 
        'notification_description' => $notificationDescription,
         'notification_date' =>  $notification_date,
    ];
         $model->insertNotification($result);
        
      
         return redirect()->to('Notifications');
  }
  
}