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
                // $data['records'] = $model->getTodayRecords();
                $data['SessionData'] = $model->findAll();
                $data['count'] = $model->getRowCount();
                $data['students'] = $model->get_students();
                // $data['Faculty'] = $model->getFacultyWithCarrier();
                // $data['ConductedDemo'] = $model->getConductedDemo();
                $data['ConductedDemoStatus'] = $model->getConductedDemoStatus();
                $data['getPaymentstatus'] = $model->Paymentstatus();
                // $data['alldemolist'] = $model->getAllDemoData();
                // $data['PendingDemo'] = $model->getPendingDemo();
                // $data['UnattendedDemoList'] = $model->UnattendedDemoList();   
                $data['Facultydatails'] = $model->getFaculty();
                $select = 'free_demo_table.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name,';
                $joinCond = 'free_demo_table.course = tbl_courses.id';
                $joinCond2 = 'free_demo_table.sub_course = tbl_sub_courses.id';
                $today = date('Y-m-d');
                $wherecond = [
                    'free_demo_table.Conducted_Demo' => 'N',
                    'free_demo_table.Book_Date >=' => $today,
                ];
                $data['PendingDemo'] = $model->jointhreetables($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $wherecond, 'DESC');
                $wherecondr = [
                    'free_demo_table.Book_Date =' => $today,
                ];
                $data['records'] = $model->jointhreetables($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $wherecondr, 'DESC');
                $wherecond1 = [
                    'free_demo_table.Conducted_Demo' => 'N',

                    'free_demo_table.Book_Date <' => $today,
                ];
                $data['UnattendedDemoList'] = $model->jointhreetables($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $wherecond1, 'DESC');
                $data['alldemolist'] = $model->jointhreetableswwc($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2,  'DESC');
                $wherecond2 = [
                    'free_demo_table.Conducted_Demo' => 'Y',
                ];
                $data['ConductedDemo'] = $model->jointhreetables($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $wherecond2, 'DESC');
                $select1 = 'register.*, carrier.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name,';
                $joinCond4 = 'register.carrier_id = carrier.D_id';
                $joinCond5 = 'carrier.course = tbl_courses.id';
                $joinCond6 = 'carrier.sub_course = tbl_sub_courses.id';
                $wherecond = [
                    'register.role' => 'Faculty',
                ];
                $data['Faculty'] = $model->joinfourtables($select1, 'register ',  'carrier', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond4, $joinCond5, $joinCond6, $wherecond, 'DESC');
                // echo '<pre>';
                // print_r($data['PendingDemo']);
                // die;
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
        $data = [
            'AssignTecher_id' => $this->request->getVar('faculty_id'),
            'meetlink' => $this->request->getVar('meetlink'),
            'Book_Date_Time' => $this->request->getVar('Book_Date_Time'),
        ];
        $db = \Config\Database::Connect();  
        if ($this->request->getVar('studentid') != "") {
            $db->table('free_demo_table')
                ->where('D_id', $this->request->getVar('studentid'))
                ->update($data);
    
            $updatedData = $db->table('free_demo_table')
                ->where('D_id', $this->request->getVar('studentid'))
                ->get()
                ->getRowArray();
    
            if ($updatedData) {
                $phoneNumber = $updatedData['phone'];
                $templates = "demo_booking_";
                $date = $updatedData['Book_Date'];
                $time = $updatedData['Book_Date_Time'];
                $meetlink = $updatedData['meetlink'];
                $msg = "Your Demo Will Schedule on $date in $time. Join this link: $meetlink";
                whatsapp($phoneNumber, $templates, $msg);
    
                session()->setFlashdata('success', 'Demo added successfully.');
            }
        }
    
        return redirect()->to('Admindashboard');
    }
    public function AssignTecherToStudent()
    {
        $model = new AdminModel();
    
        if ($this->request->getMethod() === 'post') {
            $postData = $this->request->getPost();
            $mobileNumber = $model->add($postData);
    
            if ($mobileNumber) {
                $session = session();
                $templates = "new_food_menu";
                $msg = "Your register successfully.";
                whatsapp($mobileNumber, $templates, $msg);
                $adminNumber ="7588525387";
                $templates = "new_food_menu";
                $msg = "Faculty gave slots.";
                whatsappadmin($adminNumber, $templates, $msg);
    
                $session->setFlashdata('success', 'Faculty assigned successfully!');
                return redirect()->to('Admindashboard');
            } else {
                return redirect()->to('Admindashboard');
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
                $select1 = 'faculty.*, carrier.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name,';
                $joinCond4 = 'faculty.carrier_id = carrier.D_id';
                $joinCond5 = 'carrier.course = tbl_courses.id';
                $joinCond6 = 'carrier.sub_course = tbl_sub_courses.id';
                $data['facultyData'] = $model->joinfourtableswwc($select1, 'faculty ',  'carrier', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond4, $joinCond5, $joinCond6, 'DESC');

                return view('AdminSideBar/FacultyProfile', $data);
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
                $data['studentVideoData'] = $model->getStudyVideoUplodedByStudent();
                $data['FacultyVideoData'] = $model->getStudyVideoUplodedByFaculty();
                $filteredFacultyVideoData = session()->getFlashdata('filteredFacultyVideoData');
                if (!empty($filteredFacultyVideoData)) {
                    $data['FacultyVideoData'] = array_merge($data['FacultyVideoData'], $filteredFacultyVideoData);
                }
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
                // echo '<pre>';
                // $data['studentVideoData'];
                // die;
                return view('AdminSideBar/UploadedImages', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }
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
        $data['searchStudentData'] = $model->getSearchData($table, $studentVideoStartDate, $studentVideoEndDate, $studentNames, $facultyNames);
        $data['studentList'] = $model->getStudentData();
        $data['facultyList'] = $model->getFacultyrole();
        if ($data['searchStudentData']) {
            return $this->response->setJSON($data);
        } else {
            $data['status'] = '203';
            return $this->response->setJSON($data);
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
                $data['Faculty'] = $model->getFaculty();

                $select = 'free_demo_table.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name,';
                $joinCond = 'free_demo_table.course = tbl_courses.id';
                $joinCond2 = 'free_demo_table.sub_course = tbl_sub_courses.id';
                $today = date('Y-m-d');

                $wherecond = [
                    'free_demo_table.Conducted_Demo' => 'N',
                    'free_demo_table.Reshedule_date' => null,
                ];

                $data['PendingDemo'] = $model->jointhreetables($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $wherecond, 'DESC');

                $wherecond1 = [
                    'free_demo_table.Conducted_Demo' => 'Reschedule',
                ];

                $data['resheduleDemo'] = $model->jointhreetables($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $wherecond1, 'DESC');

                $wherecond2 = [
                    'free_demo_table.Conducted_Demo' => 'Y',
                ];
                $data['ConductedDemo'] = $model->jointhreetables($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $wherecond2, 'DESC');
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
                    $model2 = new LoginModel();
                    $lastUpdatedCareerData = $model->getresultofResultofapplication($D_id);
// print_r($lastUpdatedCareerData);die;
                    if ($lastUpdatedCareerData) {
                        $registerData = [
                            'full_name' => $lastUpdatedCareerData['name'],
                            'email' => $lastUpdatedCareerData['email'],
                            'mobile_no' => $lastUpdatedCareerData['phone'],
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
                } elseif ($action === 'decline') {
                }
                return redirect()->to(previous_url());
            }
        }
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
        $phone = $this->request->getPost('mobile_no');
        $id = $this->request->getPost('id');
        $msg = 'Your password has been  updated. ';
        $Subject = 'Your Application Approved';
        $tital = 'congratulations You Are Selected';
        $model = new AdminModel();
        $result = $model->updatePassword($id, $password);
        if ($result) {
            $phoneNumber = $phone;
            $templates = "demo_booking_";
            $msg = "Your Application Approved Your Password is: $password";
            whatsapp($phoneNumber, $templates, $msg);
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
            $ccEmails = [$firstRecord->email];
            $result = $model->BackToprndinglistofdemo($D_id, $result, $date, $time);
            $Subject = 'Your Demo Rescheduled';
            $msg = "Your Demo Has Been Rescheduled - Date: $date, Time: $time";
            if ($result == 1) {
                sendConfirmationEmail($email, $ccEmails, $Subject, $msg);
                $this->session->setFlashdata('success', 'Demo Rescheduled Successfully.');
            } else {
                $this->session->setFlashdata('errormessage', 'Error Rescheduling Demo. Please try again.');
            }
        } else {
            $session = session();
            $session->setFlashdata('errormessage', 'Error fetching faculty details. Please try again.');
            // $this->session->setFlashdata('error', 'Error fetching faculty details. Please try again.');
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
                $data['schedule_data'] = $model->getFacultyslots();

                //   echo "<pre>";print_r($data['schedule_data']);exit();

                return view('AdminSideBar/FacultysidebarShedule', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }
    public function getdate()
    {
        $model = new AdminModel();
        $date = $this->request->getPost('date');
        $tableHtml = '';

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
            $tableHtml = json_encode([]);
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


            $result['getuser'] = [];

            if ($_SESSION['sessiondata']['role'] == 'Admin') {
                $chatCountWhere = array(
                    'receiver_id' => $_SESSION['sessiondata']['id'],
                    'status' => 'N'
                );
                $result['chat_count'] = $model->getalldata('online_chat', $chatCountWhere);

                $wherecondFaculty = array('is_register_done' => 'Y', 'role' => 'Faculty');
                $result['faculty'] = $model->getalldata('register', $wherecondFaculty);



                // For Student
                $wherecondStudent = array('is_register_done' => 'Y', 'role' => 'Student', 'Payment_status' => 'Y');
                $result['student'] = $model->getalldata('register', $wherecondStudent);

                $result['getuser'] = [];

                if ((!empty($result['faculty'])) || (!empty($result['faculty']))) {

                    $result['getuser'] = array_merge($result['faculty'], $result['student']);
                }
            } else if ($_SESSION['sessiondata']['role'] == 'Faculty') {
                $chatCountWhere = array(
                    'receiver_id' => $_SESSION['sessiondata']['id'],
                    'status' => 'N'
                );
                $result['chat_count'] = $model->getalldata('online_chat', $chatCountWhere);


                $wherecondFaculty = array('role' => 'Admin');
                $result['admin'] = $model->getalldata('register', $wherecondFaculty);

                $wherecondStudent = array('is_register_done' => 'Y', 'role' => 'Student', 'Payment_status' => 'Y', 'Assign_Techer_id' => $_SESSION['sessiondata']['id']);
                $result['student'] = $model->getalldata('register', $wherecondStudent);


                // $wherecond = array('Assign_Techer_id' => $_SESSION['sessiondata']['id']);
                // $result['getuser'] = $model->getalldata('register', $wherecond);
                if (is_array($result['admin']) && is_array($result['student'])) {
                    $result['getuser'] = array_merge($result['admin'], $result['student']);
                } elseif (is_array($result['admin'])) {
                    $result['getuser'] = $result['admin'];
                } elseif (is_array($result['student'])) {
                    $result['getuser'] = $result['student'];
                }
            } else if ($_SESSION['sessiondata']['role'] == 'Student') {
                $chatCountWhere = array(
                    'receiver_id' => $_SESSION['sessiondata']['id'],
                    'status' => 'N'
                );
                $result['chat_count'] = $model->getalldata('online_chat', $chatCountWhere);

                // $wherecond = array('id' => $_SESSION['sessiondata']['Assign_Techer_id']);
                // $result['getuser'] = $model->chatfaculty('register', $wherecond);

                // echo "<pre>";print_r( $result['getuser'] );exit();


                $wherecondFaculty = array('role' => 'Admin');
                $result['admin'] = $model->getalldata('register', $wherecondFaculty);

                $wherecondStudent = array('role' => 'Faculty', 'id' => $_SESSION['sessiondata']['Assign_Techer_id']);
                $result['faculty'] = $model->getalldata('register', $wherecondStudent);

                if (is_array($result['admin']) && is_array($result['faculty'])) {
                    $result['getuser'] = array_merge($result['admin'], $result['faculty']);
                } elseif (is_array($result['admin'])) {
                    $result['getuser'] = $result['admin'];
                } elseif (is_array($result['faculty'])) {
                    $result['getuser'] = $result['faculty'];
                }
            }




            echo view('chatuser', $result);
        } else {
            return redirect()->to(base_url());
        }
    }


    public function singlechat()
    {
        if (isset($_SESSION['sessiondata'])) {
            $model = new AdminModel();
            $receiverid = $this->request->uri->getSegments(1);
            // echo '<pre>';
            // print_r($receiverid);
            // die;
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

            $wherecond4 = ['id' => $receiverid[1]];
            $result['chat_user_data'] = $model->get_single_data('register', $wherecond4);
            $result['receiverids'] =  ['receiverid' => $receiverid[1]];



            // echo "<pre>";
            // print_r($result['chatdata']);
            // exit();

            echo view('chatuser', $result);
        } else {
            return redirect()->to(base_url());
        }
    }

    public function chatwithstud()
    {
        $model = new AdminModel();

        $receiverid = $this->request->uri->getSegments(1);
        // echo '<pre>';
        // print_r($receiverid[1]);
        // die;
        $wherecond = array('Assign_Techer_id' => $_SESSION['sessiondata']['id']);
        $wherecond1 = array('id' => $receiverid[1]);
        $wherecond2 = array('sender_id' => $_SESSION['id'], 'receiver_id' => $receiverid[1]);
        $wherecond3 = array('sender_id' => $receiverid[1], 'receiver_id' => $_SESSION['id']);

        $result['getdata'] = $model->getsinglerow('register', $wherecond1);
        $result['getstud'] = $model->getdata('register', $wherecond);
        $result['chatdata'] = $model->getchat('online_chat', $wherecond2, $wherecond3, $receiverid[1]);

        // echo '<pre>';print_r($result['getstud']);die;
        echo view('chatuser', $result);
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
        $wherecond = array('id ' => $formdata['sender_id']);

        $model = new AdminModel();
        $senderData = $model->getalldata('register', $wherecond);
        // print_r($senderData[0]->full_name);
        // die;
        $result = $model->insert_formdata('msg_id', 'online_chat', $formdata);
        // print_r($result);
        // die;
        echo json_encode($result);
    }

    public function studentAttendance()
    {
        $model = new AdminModel();
        $data['attendance'] = $model->fetchattandance();
            // echo '<pre>'; print_r($data['attendance']);die;
        return view('AdminSideBar/studentAttendance', $data);
    }
    public function add_notifications()
    {
        $model = new AdminModel();
        $data['admins'] = $model->get_students();
        $data['Faculty'] = $model->getFaculty();
        // echo'<pre>';print_r($data['Faculty']);die;
        $wherecond = array('is_deleted' => 'N');

        $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);
        $data['faculty_data'] = $model->getalldata('faculty', $wherecond);
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
            session()->setFlashdata('success', 'Course added successfully.');
        } else {
            $update_data = $db->table('tbl_courses')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Course updated successfully.');
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
            session()->setFlashdata('success', 'Sub course added successfully.');
        } else {
            $update_data = $db->table('tbl_sub_courses')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Sub course updated successfully.');
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
        if ($this->request->getVar('id') ==     "") {
            $add_data = $db->table('tbl_menu');
            $add_data->insert($data);
            session()->setFlashdata('success', 'Menu added successfully.');
        } else {
            $update_data = $db->table('tbl_menu')->where('id', $this->request->getVar('id'));
            $update_data->update($data);
            session()->setFlashdata('success', 'Menu updated successfully.');
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

    public function update_access_token()
    {
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

            // echo "<pre>";print_r($sub_courses);exit();
            return json_encode($sub_courses);
        } else {
            return json_encode([]);
        }
    }

    public function getSubCourses()
    {
        $model = new AdminModel();

        $courses_id_n = $this->request->getPost('courses_id_n');

        if ($courses_id_n) {
            $wherecond1 = array('is_deleted' => 'N', 'courses_id' => $courses_id_n);

            $sub_courses = $model->getalldata('tbl_sub_courses', $wherecond1);

            // echo "<pre>";print_r($sub_courses);exit();
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

        // $lastQuery = $model->getLastQuery();

        // // Now you can use $lastQuery for debugging or logging purposes
        // echo "Last Query: " . $lastQuery;exit();



        return json_encode($student_data);
    }

    public function getStudentData()
    {

        $model = new AdminModel();

        $sub_courses_id_n = $this->request->getPost('sub_courses_id_n');
        $courses_id_n = $this->request->getPost('courses_id_n');
        // $GroupSession = 'GroupSession';
        $Payment_status = 'Y';




        $whereCondition = '';
        $whereCondition = ['is_deleted' => 'N',  'Payment_status' =>  $Payment_status, 'course' => $courses_id_n, 'sub_course' => $sub_courses_id_n];


        $student_data = $model->getalldata('register', $whereCondition);

        // $lastQuery = $model->getLastQuery();

        // // Now you can use $lastQuery for debugging or logging purposes
        // echo "Last Query: " . $lastQuery;exit();



        return json_encode($student_data);
    }




    public function get_faculty_data()
    {
        $model = new AdminModel();

        $sub_courses_id_g = $this->request->getPost('sub_courses_id_g');
        $courses_id_g = $this->request->getPost('courses_id_g');

        if ($sub_courses_id_g) {

            $select = 'carrier.*, register.id as faculty_id,';
            $joinCond = 'carrier.D_id  = register.carrier_id';
            $wherecond = [
                'carrier.sub_course' => $sub_courses_id_g,
                'carrier.course' => $courses_id_g,
                'carrier.Result_of_application' => 'approve'
            ];
            $faculty_data = $model->jointwotables($select, 'carrier ', 'register ',  $joinCond,  $wherecond, 'DESC');




            // $wherecond_carrier = array('sub_course' => $sub_courses_id_g, 'course' => $courses_id_g, 'Result_of_application' => 'approve');
            // // $faculty_data = $model->getalldata('carrier', $wherecond_carrier);




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

        $selectedgroupstudentnamesString = '';

        $selectedgroupstudentnameArray = $this->request->getVar('student_ids');
        //  echo "<pre>";
        // print_r($selectedgroupstudentnameArray);
        // exit();
        if (!empty($selectedgroupstudentnameArray)) {
            $selectedgroupstudentnamesString = implode(',', $selectedgroupstudentnameArray);
        }

        $selectedgroupfacultynamesString = '';

        $selectedgroupfacultynameArray = $this->request->getVar('faculty_ids');
        if (!empty($selectedgroupfacultynameArray)) {
            $selectedgroupfacultynamesString = implode(',', $selectedgroupfacultynameArray);
        }
        
        $result = [
            // 'selected_faculty' => $this->request->getPost('selected_faculty'),
            // 'selected_students' => $this->request->getPost('selected_students'),
            'selected_faculty' => $selectedgroupfacultynamesString,
            'selected_students' => $selectedgroupstudentnamesString,
            'notification_description' => $this->request->getPost('notification_description'),
            'notification_date' =>  $this->request->getPost('notification_date'),
            'admin_id' => $admin_id,
            'created_on' => date('Y:m:d H:i:s'),
        ];

        // echo "<pre>";
        // print_r($result);
        // exit();

        $addNotification = $model->insertNotification($result);
        // print_r($addNotification);
        // die;
        if ($addNotification) {
            $session = session();
            $session->setFlashdata('success', 'Notification sent successfully.');
        } else {
            $session = session();
            $session->setFlashdata('errormessage', 'Error while sending notification.');
        }


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

        return view('AdminSideBar/viewprofile', $data);
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
        $wherecond1 = array('carrier_id' => $profile_id);
        $facultyData = $model->getsinglerow('register',$wherecond1);
        $faculty_register_id = $facultyData->id;
        // echo'<pre>';print_r($faculty_register_id);die;
        $data['faculty_slots'] = $model->getAllSlots($wherecond);
        //  echo "<pre>"; print_r($data['profile_data']);exit();
        $select = 'attendeance_table.*, register_faculty.full_name as faculty_name, register_student.full_name as student_name, payment.no_of_session';
        $table1 = 'attendeance_table';
        $table2 = 'register as register_faculty';
        $table3 = 'register as register_student';
        $table4 = 'payment';
        $joinCond = 'register_faculty.id = attendeance_table.faculty_id';
        $joinCond2 = 'register_student.id = attendeance_table.student_registerid';
        $joinCond3 = 'payment.user_id = attendeance_table.student_registerid';
        // $wherecond2 =  array('faculty_id' => $faculty_register_id);  
         $wherecond2 = [
            'attendeance_table.faculty_id' => $faculty_register_id, 
        ];
        $type ='left';
        $data['attendanceRecord'] = $model->joinfourtables($select, $table1, $table2, $table3, $table4, $joinCond, $joinCond2, $joinCond3, $wherecond2, $type);
//    echo'<pre>';print_r($data['attendanceRecord']);die;
$wherecond3 = [
    'schedule_list.faculty_registerid' => $faculty_register_id, 
];
$data['scheduleRecord'] = $model->jointwotables('schedule_list.*, register.full_name as faculty_name', 'schedule_list', 'register', 'register.id = schedule_list.faculty_registerid',  $wherecond3, 'left');
//    echo'<pre>';print_r($data['scheduleRecord']);die;
        return view('AdminSideBar/viewprofilefaculty', $data);
    }


    // public function viewProfiles()
    // {
    //     $model = new AdminModel();

    //     if (isset($_SESSION['sessiondata'])) {
    //         $sessionData = $_SESSION['sessiondata'];

    //         $email = $sessionData['email'] ?? null;
    //         $password = $sessionData['password'] ?? null;

    //         if ($email !== null && $password !== null) {
    //             $uri = service('uri');

    //             // Get the second segment of the URI
    //             $profile_id = $uri->getSegment(2);


    //             $wherecond = array('student_id ' => $profile_id);

    //             $data['profile_data'] = $model->getcorcessforstudentprofile('student', $wherecond);


    //             return view('AdminSideBar/viewprofiles', $data);
    //         } else {
    //             return redirect()->to(base_url());
    //         }
    //     } else {
    //         return redirect()->to(base_url());
    //     }
    // }
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


                $wherecond = array('student_id' => $profile_id);

                $data['profile_data'] = $model->getcorcessforstudentprofile('student', $wherecond);
                $student_registerid = $data['profile_data']->register_id;
                //  echo'attendance:<pre>';print_r($student_registerid);die;
                $wherecond1 = array('student_registerid' => $student_registerid);

                $data['attendanceRecord'] = $model->fetchAttendanceForStudent($student_registerid);
                $select = 'payment.*, register.full_name';
                $table1 = 'payment';
                $table2 = 'register';
                $joinCond = 'register.id = payment.user_id';
                $wherecond = array('user_id' => $student_registerid);
                $type = 'left';
                $data['paymentRecord'] = $model->jointwotables($select,$table1,$table2,$joinCond,$wherecond,$type);
                // echo'attendance:<pre>';print_r($data['paymentRecord']);die;

                $data['schedule_data'] = $model->getStudentSchedule($student_registerid);
                //  echo'schedule_data:<pre>';print_r($data['schedule_data']);die;

               
               

                return view('AdminSideBar/viewprofiles', $data);
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

        $select = 'free_demo_table.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name,';
        $joinCond = 'free_demo_table.course = tbl_courses.id';
        $joinCond2 = 'free_demo_table.sub_course = tbl_sub_courses.id';

        $demo_list = $model->jointhreetableswwc($select, 'free_demo_table ', 'tbl_courses ', 'tbl_sub_courses ', $joinCond, $joinCond2, 'DESC');

        $result = array(); // Use a different variable

        if (!empty($demo_list)) {
            foreach ($demo_list as &$demo) {

                $AssignTecher_id = $demo->AssignTecher_id;
                $wherecon = array('id' => $AssignTecher_id);

                $faculty_data = $model->getsinglerow('register', $wherecon);

                // Add additional data to the demo array
                if (!empty($faculty_data)) {
                    $teachername = $faculty_data->full_name;
                } else {
                    $teachername = 'No faculty assigned';
                }
                $demo->teacher = $teachername;

                // You can add more fields as needed, for example:
                // $demo->test = 'test';

                $result['demo_list'][] = $demo;
            }
        }

        echo view('demo_list', $result);
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
        // $data['faculty_list'] = $model->getFaculty();


        $select = 'register.*, carrier.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name,';
        $joinCond = 'register.carrier_id = carrier.D_id';
        $joinCond2 = 'carrier.course = tbl_courses.id';
        $joinCond3 = 'carrier.sub_course = tbl_sub_courses.id';


        $wherecond = [
            'register.role' => 'Faculty',
        ];

        // return $this->db->table('register')->where('role', 'Faculty')->get()->getResult();


        $data['faculty_list'] = $model->joinfourtables($select, 'register ',  'carrier', 'tbl_courses ', 'tbl_sub_courses ',  $joinCond, $joinCond2, $joinCond3, $wherecond, 'DESC');

        // echo "<pre>";
        // print_r($data['faculty_list']);
        // print_r($data['data_list']);exit();


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
        // echo "<pre>";print_r($_POST);exit();

        // echo $this->request->getVar('id');exit();

        $model = new AdminModel();
        $wherecond = ['id' => $this->request->getVar('id')];
        $single = $model->getsinglerow('tbl_group', $wherecond);
        $startTime = '';
        $endTime = '';

        $selectedDaysString = '';
        $selectedDaysArray = $this->request->getVar('days[]');
        if (!empty($selectedDaysArray)) {
            $selectedDaysString = implode(',', $selectedDaysArray);
        }

        $selectedgroupstudentnamesString = '';

        $selectedgroupstudentnameArray = $this->request->getVar('student_id');
        if (!empty($selectedgroupstudentnameArray)) {
            $selectedgroupstudentnamesString = implode(',', $selectedgroupstudentnameArray);
        }


        // Extract start and end times from 'shedules_time'
        $sheduleTimes = explode(' - ', $this->request->getVar('shedule'));

        if (isset($sheduleTimes[0]) && isset($sheduleTimes[1])) {
            $startTime = $sheduleTimes[0];
            $endTime = $sheduleTimes[1];
        }


        $db = \Config\Database::Connect();

        // echo "<pre>";print_r($single);exit();


        if (empty($single)) {
            $datas = [
                'groupstudentname' => $selectedgroupstudentnamesString, // Convert array to comma-separated string
                'faculty_id' => $this->request->getVar('faculty_id_g'),
                // 'group_id' => $lastInsertID,
                'groupname' => $this->request->getVar('group_name'),

                'days' => $selectedDaysString,
                'start_date' => $this->request->getVar('start_date'),
                'end_date' => $this->request->getVar('end_date'),
                'shedules_time' => $this->request->getVar('shedule'),
                'start_time' => $startTime,
                'end_time' => $endTime,
                'created_on' => date('Y:m:d H:i:s'),
            ];


            // echo "<pre>";print_r($datas);exit();

            $isAvailable = $this->checkAvailability($datas);


            if ($isAvailable) {
                $add_data = $db->table('tbl_student_shedule');
                $add_data->insert($datas);

                $data = [
                    'courses_id_g' => $this->request->getVar('courses_id_g'),
                    'sub_courses_id_g' => $this->request->getVar('sub_courses_id_g'),
                    'student_id' => $selectedgroupstudentnamesString, // Convert array to comma-separated string
                    'group_name' => $this->request->getVar('group_name'),
                    'faculty_id_g' => $this->request->getVar('faculty_id_g'),
                    'days' => $selectedDaysString,
                    'shedule' => $this->request->getVar('shedule'),
                    'created_on' => date('Y-m-d H:i:s'),
                ];

                $add_data = $db->table('tbl_group');
                $add_data->insert($data);


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
                session()->setFlashdata('success', 'Group created successfully.');
            } else {
                session()->setFlashdata('errormessage', 'Selected days and time are not available.');
            }
        } else {
            // echo "<pre>";print_r($single);exit();
            $selectedDaysArray = $this->request->getVar('days[]');

            $selectedDaysArray[] = $single->days;

            $selectedDaysString = implode(',', $selectedDaysArray);

            $selectedgroupstudentnameArray =  $this->request->getVar('student_id[]');
            $selectedgroupstudentnameArray[] = $single->student_id;
            $selectedgroupstudentnamesString = implode(',', $selectedgroupstudentnameArray);

            $data = [
                'student_id' => $selectedgroupstudentnamesString,

                'days' => $selectedDaysString,


            ];



            $datas = [
                'groupstudentname' => $selectedgroupstudentnamesString,

                'days' => $selectedDaysString,


            ];

            // echo "<pre>";print_r($datas);exit();

            $update_data = $db->table('tbl_student_shedule')->where('student_id', $this->request->getVar('student_id'));
            $update_data->update($datas);

            $update_data = $db->table('tbl_group')->where('id', $this->request->getVar('id'));
            $update_data->update($data);


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



            session()->setFlashdata('success', 'Data updated successfully.');
        }








        // Update data in 'register' table using student IDs


        return redirect()->to('create_group');
    }



    protected function checkAvailability($data)
    {
        $model = new AdminModel();
        $wherecond = [
            'faculty_id' => $data['faculty_id'],
            'shedules_time' => $data['shedules_time'],
        ];
        $existingSchedules = $model->getslots($wherecond);
        foreach ($existingSchedules as $existingSchedule) {
            $availableDays = explode(',', $existingSchedule->days);
            $selectedDays = explode(',', $data['days']);
            if (array_intersect($selectedDays, $availableDays)) {
                return false;
            }
        }
        return true;
    }


    public function student_list_of_group()
    {

        if (!empty($_SESSION['sessiondata'])) {
            $model = new AdminModel();
            $wherecond = array('is_deleted' => 'N');


            $wherecond1 = array('is_deleted' => 'N');
            $orderByField = 'created_on';
            $orderByDirection = 'desc';




            $data['student_list_of_group'] = $model->getalldatadesc('tbl_group', $wherecond1, $orderByField, $orderByDirection);
            $data['courses_data'] = $model->getalldata('tbl_courses', $wherecond);

            echo view('student_list_of_group', $data);
        } else {
            return redirect()->to(base_url());
        }
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
            $wherecond = array('id' => $faculty_id_g);


            $faculity_data = $model->getsinglerow('register', $wherecond);

            if (!empty($faculity_data)) {
                $wherecond1 = array('faculty_registerid' => $faculity_data->id);
                $shedule_data = $model->getalldata('schedule_list', $wherecond1);

                // echo "<pre>";print_r($shedule_data);exit();
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
                return view('AdminSideBar/payments', $data);
            } else {
                return redirect()->to(base_url());
            }
        }
    }


    public function update_seen_status()
    {
        $id = $this->request->getVar('id');

        $data = [
            'status' => 'Y',
        ];

        $db = \Config\Database::Connect();
        if ($this->request->getVar('id') != "") {
            $update_data = $db->table('online_chat')->where('sender_id', $this->request->getVar('id'));
            $update_data->update($data);
            // session()->setFlashdata('success', 'Data updated successfully.');
        }
        return redirect()->to('chatuser/' . $id);
    }



    public function chechk_selected_shedules_time_id()
    {
        $admin_model = new AdminModel();
        $selected_shedules_time = $this->request->getPost('selected_shedules_time');
        $days = $this->request->getPost('days');
        $faculty_id = $this->request->getPost('faculty_id');

        if ($selected_shedules_time) {

            $result = $admin_model->chechk_selected_shedules_time_id($selected_shedules_time, $days, $faculty_id);

            return json_encode($result);
        }
    }
    public function studentSlots()
    {

        $model = new AdminModel();
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {
                $data['schedule_data'] = $model->getstudentslots();
                //    echo "<pre>";print_r($data['schedule_data']);exit();
                echo view('AdminSideBar/StudentselectedSlots', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }



    public function get_shedule_data_for_group()
    {
        $model = new AdminModel();


        $assignTeacherId = $this->request->getPost('facultyidg');

        $wherecond1 = [

            'id' => $assignTeacherId,


        ];



        $teacher_data = $model->getsinglerow('register', $wherecond1);

        // echo "<pre>";print_r($teacher_data);

        $teacher_id = '';
        if (!empty($teacher_data)) {
            $teacher_id = $teacher_data->id;
        }


        $selectedDays = $this->request->getPost('selectedDays');
        $currentYear = date('Y');
        $currentMonth = date('m');
        $startDate = "{$currentYear}-{$currentMonth}-01 00:00:00";
        $endDate = date('Y-m-t 23:59:59', strtotime($startDate));

        // Prepare the WHERE condition for the query
        $wherecond = [
            'faculty_registerid' => $teacher_id,
            'start_date >= ' => $startDate,
            'end_date <= ' => $endDate,
        ];


        // Prepare the WHERE condition for the query


        // echo "<pre>";print_r($selectedDays);

        $shedule_data = $model->getalldataforstudent('schedule_list', $wherecond, $selectedDays);




        if (!empty($shedule_data)) {
            return json_encode($shedule_data);
        } else {
            return json_encode([]);
        }
    }





    public function check_group_name()
    {

        $admin_model = new AdminModel();
        $group_name = $this->request->getPost('group_name');

        if ($group_name) {
            $data = $admin_model->check_group_name($group_name, 'group_name');
            // echo "<pre>";
            // print_r($email);exit();
            return json_encode($data);
        } else {
            return json_encode([]);
        }
    }
    public function FacultyAttendance()
    {
        $model = new AdminModel();
        $data['attendance'] = $model->getFacultyAttendance();

        // echo'<pre>';print_r($data['attendance']);die;
        echo view('AdminSideBar/FacultyAttendance', $data);;
    }

    public function search()
{
    $searchKeyword = $this->request->getPost('searchKeyword');

    // echo  $searchKeyword;


    if (isset($_SESSION['sessiondata'])) {
        $model = new AdminModel();


        $result['getuser'] = [];

        if ($_SESSION['sessiondata']['role'] == 'Admin') {
            $chatCountWhere = array(
                'receiver_id' => $_SESSION['sessiondata']['id'],
                'status' => 'N'
            );
            $result['chat_count'] = $model->getalldata('online_chat', $chatCountWhere);

            $wherecondFaculty = array('is_register_done' => 'Y', 'role' => 'Faculty', 'full_name LIKE' => $searchKeyword . '%',);
            $result['faculty'] = $model->getalldata('register', $wherecondFaculty);



            // For Student
            $wherecondStudent = array('is_register_done' => 'Y', 'role' => 'Student', 'Payment_status' => 'Y' , 'full_name LIKE' => $searchKeyword . '%',);
            $result['student'] = $model->getalldata('register', $wherecondStudent);

            $result['getuser'] = [];

            if ((!empty($result['faculty'])) && is_array($result['faculty']) && (!empty($result['student'])) && is_array($result['student'])) {
                $result['getuser'] = array_merge($result['faculty'], $result['student']);
            } elseif (!empty($result['faculty']) && is_array($result['faculty'])) {
                $result['getuser'] = $result['faculty'];
            } elseif (!empty($result['student']) && is_array($result['student'])) {
                $result['getuser'] = $result['student'];
            } else {
                $result['getuser'] = [];
            }
        } else if ($_SESSION['sessiondata']['role'] == 'Faculty') {
            $chatCountWhere = array(
                'receiver_id' => $_SESSION['sessiondata']['id'],
                'status' => 'N'
            );
            $result['chat_count'] = $model->getalldata('online_chat', $chatCountWhere);


            $wherecondFaculty = array('role' => 'Admin',  'full_name LIKE' => $searchKeyword . '%',);
            $result['admin'] = $model->getalldata('register', $wherecondFaculty);

            $wherecondStudent = array('is_register_done' => 'Y', 'role' => 'Student', 'Payment_status' => 'Y', 'Assign_Techer_id' => $_SESSION['sessiondata']['id'],  'full_name LIKE' => $searchKeyword . '%',);
            $result['student'] = $model->getalldata('register', $wherecondStudent);


            // $wherecond = array('Assign_Techer_id' => $_SESSION['sessiondata']['id']);
            // $result['getuser'] = $model->getalldata('register', $wherecond);
            if (is_array($result['admin']) && is_array($result['student'])) {
                $result['getuser'] = array_merge($result['admin'], $result['student']);
            } elseif (is_array($result['admin'])) {
                $result['getuser'] = $result['admin'];
            } elseif (is_array($result['student'])) {
                $result['getuser'] = $result['student'];
            }
        } else if ($_SESSION['sessiondata']['role'] == 'Student') {
            $chatCountWhere = array(
                'receiver_id' => $_SESSION['sessiondata']['id'],
                'status' => 'N'
            );
            $result['chat_count'] = $model->getalldata('online_chat', $chatCountWhere);

            // $wherecond = array('id' => $_SESSION['sessiondata']['Assign_Techer_id']);
            // $result['getuser'] = $model->chatfaculty('register', $wherecond);

            // echo "<pre>";print_r( $result['getuser'] );exit();


            $wherecondFaculty = array('role' => 'Admin',  'full_name LIKE' => $searchKeyword . '%',);
            $result['admin'] = $model->getalldata('register', $wherecondFaculty,);

            $wherecondStudent = array('role' => 'Faculty', 'id' => $_SESSION['sessiondata']['Assign_Techer_id'],  'full_name LIKE' => $searchKeyword . '%',);
            $result['faculty'] = $model->getalldata('register', $wherecondStudent);

            if (is_array($result['admin']) && is_array($result['faculty'])) {
                $result['getuser'] = array_merge($result['admin'], $result['faculty']);
            } elseif (is_array($result['admin'])) {
                $result['getuser'] = $result['admin'];
            } elseif (is_array($result['faculty'])) {
                $result['getuser'] = $result['faculty'];
            }
        }




        echo view('chatuser', $result);
    } else {
        return redirect()->to(base_url());
    }




    // $model = new AdminModel();
    
    // // Retrieve the search keyword from the form
    

    // // Perform a search in the 'register' table based on the name
    // $searchResult = $model->getalldata('register', $wherecond);

    // // echo "<pre>";print_r($searchResult);exit();

    // // Pass the search result to the view
    // $data['chat_user_data'] = $searchResult;

    // // Load your view with the search result
    // return view('search_results', $data);
}
}
