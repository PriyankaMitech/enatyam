<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\StudentModel;
use CodeIgniter\Controller;
use App\Models\LoginModel;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once 'src/Exception.php';
require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';
class StudentController extends BaseController
{
    
    public function StudentVideouplode()
    {
        return view('StuUplodeVideo');
    }
    public function profilemanagment()
    {
        // echo "hiii";
        $session = session();
        if ($session->has('id')) {
            $user_id = $session->get('id');

            // echo "$user_id"; exit();
            $login_model = new LoginModel();

            $data['user_data'] = $login_model->get_user_data($user_id);

            return view('profilemanagment', $data);
        } else {
            return view('home');
        }
    }
    public function UplodeVideo()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {

                $session = session();
                if ($session->has('id')) {
                    $user_id = $session->get('id');
                    $login_model = new LoginModel();
                    $data['user_data'] = $login_model->get_user_data($user_id);
                    return view('StudentSidebar/UplodeVideo', $data);
                } else {
                    return redirect()->to(base_url());
                }
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return view('home');
        }
    }
    public function uploadMedia()
    {
        $result = session();
        $registerId = $result->get('id');
        $StudentModel = new StudentModel();
        $registerData = $StudentModel->getAllRegisterData($registerId, ['full_name', 'Assign_Techer_id']);
    
        $assignTeacherId = $registerData[0]->Assign_Techer_id;
        $full_name = $registerData[0]->full_name;
    
        if ($assignTeacherId === null) {
            // Display an error message
            $result->setFlashdata('error', 'You cannot upload a video because you do not have a faculty assigned.');
    
            // Redirect to the dashboard with the error message
            return redirect()->to('StudentDashboard');
        }
    
        // Get uploaded files
        $image = $this->request->getFile('imageFile');
        $video = $this->request->getFile('videoFile');
    
        // Check if an image was uploaded
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            $image->move(ROOTPATH . 'public/uploads/images', $imageName);
    
            // Save image name, Assign_Teacher_id, and registerId to the database
            $StudentModel->insert(['name' => $imageName, 'type' => 'image', 'Faculty_id' => $assignTeacherId, 'register_id' => $registerId, 'Student_name' => $full_name]);
    
            // Set success message in session
            $result->setFlashdata('success', 'Image uploaded successfully.');
        }
    
        // Check if a video was uploaded
        if ($video && $video->isValid() && !$video->hasMoved()) {
            $videoName = $video->getName();
            $video->move(ROOTPATH . 'public/uploads/StudentStudyvideos', $videoName);
    
            // Save video name, Assign_Teacher_id, and registerId to the database
            $StudentModel->insert(['name' => $videoName, 'type' => 'video', 'Faculty_id' => $assignTeacherId, 'register_id' => $registerId, 'Student_name' => $full_name]);
    
            // Set success message in session
            $result->setFlashdata('success', 'Video uploaded successfully.');
        }
    
        return redirect()->to('UplodeVideo');
    }

    public function StudentSideBarVideo()
    {
        return view('StudentSideBarVideo');
    }


    public function lostpassword()
    {
        // Get the email from the POST request
        $email = $this->request->getPost('email');
        session()->set('email', $email);
        $StudentModel = new StudentModel();
        //     // Check if the email is present in the database and has the role "student"
        $user = $StudentModel->getUserByEmail($email);

        if ($user) {
            // Email and role match, proceed to send OTP
            $verification_code = mt_rand(100000, 999999);
            session()->set('verification_code', $verification_code);
            try {
                // Create a new PHPMailer instance
                $mail = new PHPMailer(true);

                // Configure SMTP settings
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'siddheshkadgemitech@gmail.com';
                $mail->Password   = 'lxnpuyvyefpbcukr';
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;

                // Set email details
                $mail->setFrom('siddheshkadgemitech@gmail.com', 'Open Time Verification Code');
                $mail->addAddress($email, 'Recipient Name');
                $mail->isHTML(true);
                $mail->Subject = 'Email Verification Code';
                $mail->Body = "Your OTP is: $verification_code <br>";

                // Send the email
                $mail->send();

                $response = ['status' => 'success'];
                return $this->response->setJSON($response);
            } catch (Exception $e) {
                $response = ['status' => 'error', 'error' => $mail->ErrorInfo];
                return $this->response->setJSON($response);
            }
        } else {
            // Email not found or role is not "student"
            $response = ['status' => 'error', 'message' => 'Invalid email or role'];
            return $this->response->setJSON($response);
        }
    }

    public function otpvalidate()
    {

        $verification_code = session()->get('verification_code');
        $entered_otp = $this->request->getPost('entered_otp');

        if ($entered_otp == $verification_code) {

            $result = ['status' => 'success'];
            return $this->response->setJSON($result);
        } else {
            $response = ['status' => 'error', 'message' => 'Invalid OTP'];
            return $this->response->setJSON($response);
        }
    }
    public function newpassword()
    {
        $newPassword = $this->request->getPost('new_password');
        $newPassword = $this->request->getPost('conf_password');
        $email = session()->get('email');

        $StudentModel = new StudentModel();
        $data = [
            'email' => $email,
            'password' => $newPassword,
            'confirm_pass' => $newPassword,
        ];

        $db = \Config\Database::connect();


        $update_data = $db->table('register')->where('email', $email);
        $update_data->update($data);
        return redirect()->back();
    }
    public function ScheduleStudent()
    {
        $session = session();
        $user_id = $session->get('id');
        $StudentModel = new StudentModel();

        $data['SessionCount'] = $StudentModel->get_user_Session($user_id);
        $data['slots'] = $StudentModel->Getseslectedslotstostudent($user_id);
        //  print_r($data['SessionCount']);die;
        return view('StudentSidebar/ScheduleStudent',$data);
    }

    public function selectStudentSchedule()
    {
        if ($this->request->getMethod() === 'post') {

            $student_register_Id = $this->request->getPost('register_student_id');
            $selectedAppointments = json_decode($this->request->getPost('selected_appointments'), true);

            $StudentModel = new StudentModel();
            $data = [];
            foreach ($selectedAppointments as $appointment) {
                $data[] = [
                    'register_student_id' => $student_register_Id,
                    'date' => $appointment['date'],
                    'start_time' => $appointment['formTime'],
                    'end_time' => $appointment['toTime'],
                ];
            }

            $StudentModel->insertSelectedSlotdByStudents($data);
            return redirect()->to('StudentSelectClassDates');
        } else {
            // Handle non-POST requests (optional).
        }
    }
    public function StudentProfile()
    {
        $result = session();
        $registerId = $result->get('id');
        $StudentModel = new StudentModel();
        $model = new AdminModel();

// echo  $registerId;


        $select1 = 'register.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name, countries.code,';
        $joinCond5 = 'register.course = tbl_courses.id';
        $joinCond6 = 'register.sub_course = tbl_sub_courses.id';
        $joinCond = 'register.country = countries.name';



        $wherecond = [
            'register.id ' =>$registerId,
        ];




        $data['profileData'] = $model->joinfourtablessingle($select1, 'register ', 'tbl_courses ', 'tbl_sub_courses', 'countries',  $joinCond5, $joinCond6, $joinCond , $wherecond);


        // echo "<pre>";print_r($data['profileData']);exit();

        $wherecond1 = array('is_deleted' => 'N');

        $data['country_data'] = $model->getalldata('countries', $wherecond1);

        return view('StudentSidebar/StudentProfile', $data);
    }
    public function Studentpasswordupdate()
    {
        $StudentModel = new StudentModel(); // Replace YourModel with the actual name of your model

        $userEmail = $this->request->getPost('user_email');
        $oldPassword = $this->request->getPost('old-password');
        $newPassword = $this->request->getPost('new-password');
        $confirmPassword = $this->request->getPost('confirm-password');

        $user = $StudentModel->getStudendByEmail($userEmail);
        $databaseOldPassword = $user->password;
        if ($user && isset($user->password)) {
            if (is_string($oldPassword) && $oldPassword === $databaseOldPassword) {
                // Check if $newPassword and $confirmPassword are valid strings and match
                if (is_string($newPassword) && is_string($confirmPassword) && $newPassword == $confirmPassword) {
                    $newPassword = $newPassword;
                    $StudentModel->updatePassword($user->id, $newPassword);

                    echo json_encode(['success' => true, 'message' => 'Password updated successfully.']);
                } else {
                    echo json_encode(['success' => false, 'error' => 'New password and confirm password must be valid strings and match.']);
                }
            } else {
                echo json_encode(['success' => false, 'error' => 'Old password does not match.']);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'User not found or invalid password data.']);
        }
    }
    public function changeCountry()
    {
        $model = new AdminModel();

        $Country = $this->request->getPost('changeCountry');
        $result = session();
        $registerId = $result->get('id');
        $StudentModel = new StudentModel();
        $countryList['list'] = $StudentModel->updateCountry($Country, $registerId);
        return redirect()->to('StudentProfile');
    }

    // public function StudentSelectClassDates()
    // {
    //     if (isset($_SESSION['sessiondata']) && $_SESSION['role'] == 'Student') {
    //         $result = session();
    //         $registerId = $result->get('id');
    //         $StudentModel = new StudentModel();
    //         $registerData =  $StudentModel->fetchid($registerId);
    //         $assignTeacherId = $registerData->Assign_Techer_id;
    //         $data['assignFacultyData'] =  $StudentModel->fetchdataFromid($assignTeacherId, $registerId);
    //         $data['registerId'] = $registerId;
    //         $data['Assign_Techer_id'] = $assignTeacherId;
    //         // $data['assignFacultyData'] = $assignFacultyData;
    //         return view('StudentSidebar/StudentSelectClassDates', $data);
    //     } else {
    //         return redirect()->to(base_url());
    //     }
    // }
    public function StudentSelectClassDates()
    {
        $result = session();
        $registerId = $result->get('id');


        // echo $registerId ;exit();
        $StudentModel = new StudentModel();
        $model = new AdminModel();

        $Sheduledatafromfaculty =  $StudentModel->fetchid($registerId);
        // echo "<pre>";print_r($Sheduledatafromfaculty);exit();
        $data['slots'] = NULL;
        if(!empty($Sheduledatafromfaculty)){
        $assignTeacherId = $Sheduledatafromfaculty->Assign_Techer_id;
        $wherecond = array(
                            'faculty_registerid' => $assignTeacherId,
                            'MONTH(start_datetime)' => date('m'), // Compare with the current month for start_datetime
                            'MONTH(end_datetime)' => date('m')    // Compare with the current month for end_datetime
                          );

    
        $data['slots'] =  $model->getalldata('schedule_list',$wherecond);
    }
    //    echo "<pre>";print_r($data['slots']);exit();
        return view('StudentSidebar/StudentSelectClassDates',$data);
    }
    
    public function selectedslotsfromstudent()
    {
        $registerId = $this->request->getPost('registerId');
        $selectedId = $this->request->getPost('selectedId');
        $StudentModel = new StudentModel();

        $registerData = $StudentModel->fetchProfileDate($registerId);
        //    print_r($registerData);
        // print_r($registerData[0]->Session_Start_Date);die;
        $sessionStartDate = $registerData[0]->Session_Start_Date;
        // print_r($sessionStartDate);die;

        $dataToUpdate = [
            'student_register_id' => $registerId,
            'session_start_date' => $sessionStartDate, // Update the column with the fetched value
        ];
        //  print_r($dataToUpdate);die;

        $StudentModel->updateData($selectedId, $dataToUpdate, $registerId);
        return redirect()->to('SelectDate');
    }
    public function studentsessionstatus()
    {
        $result = session();
        $registerId = $result->get('id');
        $StudentModel = new StudentModel();
        $registerData =  $StudentModel->fetchSessionsByid($registerId);

        $result = session();
        $registerId = $result->get('id');
        $StudentModel = new StudentModel();
        $registerData =  $StudentModel->fetchid($registerId);
        $assignTeacherId = $registerData->Assign_Techer_id;
        $assignFacultyData['assignFacultyData'] =  $StudentModel->fetchdataFromid($assignTeacherId);
        $data['registerId'] = $registerId;
        $data['assignFacultyData'] = $assignFacultyData;
        return view('StudentSidebar/StudentSelectClassDates', $data);
    }




    public function feedback()
    {
        echo view('StudentSidebar/feedback');
    }

    public function savefeedback()
    {
        $model = new AdminModel();
        $insertdata = array(
            'student_id' => $_SESSION['sessiondata']['id'],
            'faculty_id' => $_POST['faculty_id'],
            'rating' => $_POST['faculty'],
            'review_message' => $_POST['review_message']
        );
        $result = $model->insert_formdata('id', 'feedback', $insertdata);
        if ($result) {
            session()->setFlashdata('success', 'Feedback submited!');
            echo json_encode($result);
            // print_r($this->session->flashdata('update'));die;

        }
    }

    public function get_citizenrate_by_id()
    {
        $sector = $this->input->post('sector');
        $sector_name = str_replace("_RATING", '', $sector);
        // echo json_encode($sector_name);
        $result = $this->Citizen_Model->get_citizenrate_by_id($sector, $sector_name);
        echo json_encode($result);
    }

    public function reschedule()
    {
        echo view('StudentSidebar/RescheduleClass');
    }

    public function SessionConduct()
    {
        if (isset($_POST['conduct'])) {
            $conductStatus = $_POST['conduct'];
            $modalCurrentDate = isset($_POST['modalCurrentDate']) ? $_POST['modalCurrentDate'] : 'N/A';
            $modalSessionNumber = isset($_POST['modalSessionNumber']) ? $_POST['modalSessionNumber'] : 'N/A';
            $modalButtonText = isset($_POST['modalButtonText']) ? $_POST['modalButtonText'] : 'N/A';

            // Now you can use these values as needed
            echo "Conduct Status: $conductStatus\n";
            echo "Modal Current Date: $modalCurrentDate\n";
            echo "Modal Session Number: $modalSessionNumber\n";
            echo "Modal Button Text: $modalButtonText\n";
        } else {
            // Handle case where conduct value is not set
            echo "Conduct value not set";
        }
    }
    public function submitForm()
    {
        $result = session();
        $registerId = $result->get('id');
        $studentModel = new StudentModel();
        $action = $this->request->getPost('action');
        $sessionNumber = $this->request->getPost('sessionNumber');

        switch ($action) {
            case 'Reschedule':
                $data = [
                    'action' => $action,
                    'sessionNumber' => $sessionNumber,
                    'Session_date' => $this->request->getPost('Session_date'),
                    'current_time' => $this->request->getPost('current_time'),
                    'reschedule_time' => $this->request->getPost('reschedule_time'),
                    'reschedule_date' => $this->request->getPost('reschedule_date'),
                    'student_registerid' => $registerId,
                    'reason' => $this->request->getPost('reason'),
                ];
                break;
            case 'Leave':
                $data = [
                    'action' => $action,
                    'form2_date' => $this->request->getPost('form2_date'),
                    'form2Reason' => $this->request->getPost('form2Reason'),
                ];
                break;
            default:
                return $this->response->setStatusCode(400)->setJSON(['error' => 'Invalid action']);
        }

        // Insert data into the Student table with student_registerid populated
        $success = $studentModel->insertFormData($data, $registerId);
        // print_r($success);die;
        if ($success == '1') {
            session()->setFlashdata('success', 'Rewest Send successfully.');
            echo json_encode($success);
        }
    }

    public function set_student_shedule()
    {

        $data = [
            'student_id' => $this->request->getVar('student_id'),
            'student_id' => implode(',', $this->request->getVar('student_id')),
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

    public function get_shedule_data_for_student(){

        $result = session();
        $registerId = $result->get('id');


        // echo $registerId ;exit();
        $StudentModel = new StudentModel();
        $model = new AdminModel();

        $Sheduledatafromfaculty =  $StudentModel->fetchid($registerId);
        // echo "<pre>";print_r($Sheduledatafromfaculty);exit();
        $assignTeacherId = '';
        if(!empty($Sheduledatafromfaculty)){
        $assignTeacherId = $Sheduledatafromfaculty->Assign_Techer_id;
        }

        $selectedDays = $this->request->getPost('selectedDays');
        // $selectedOptionType = $this->request->getPost('selectedOptionType');



      // Get the current year
        $currentYear = date('Y');
        $currentMonth = date('M');

        // Now you can use $currentYear in your code
        // For example, you can use it in constructing the start and end dates
        $startDate = "{$currentYear}-{$currentMonth}-01 00:00:00";
        $endDate = date('Y-m-t 23:59:59', strtotime($startDate));

        // Prepare the WHERE condition for the query
        $wherecond1 = [
            'OptionType' => 'day',
            'faculty_registerid' => $assignTeacherId,
            'start_datetime >= ' => $startDate,
            'start_datetime <= ' => $endDate,
        ];
            $shedule_data = $model->getalldataforstudent('schedule_list',$wherecond1, $selectedDays);


        // Fetch the schedule data for the current month and selected days
        // echo "<pre>";print_r($shedule_data);exit();


        if (!empty($shedule_data)) {
            return json_encode($shedule_data);
        } else {
            return json_encode([]);
        }   
    }
}
