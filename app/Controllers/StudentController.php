<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\StudentModel;
use CodeIgniter\Controller;
use App\Models\LoginModel;
use App\Models\facultymodel;


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
    public function certificate() {

        return view('StudentSidebar/certificates');
        
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
        $session = session();
        $registerId = $session->get('id');
        $StudentModel = new StudentModel();
        $facultyModel = new facultymodel();
        $registerData = $StudentModel->getAllRegisterData($registerId, ['full_name', 'Assign_Techer_id']);
        $model = new AdminModel();
        $assignTeacherId = $registerData[0]->Assign_Techer_id;
        // echo "Teacher name ";
        // print_r($assignTeacherId);
        // die;
        $full_name = $registerData[0]->full_name;

        if ($assignTeacherId === null) {

            // Display an error message
            $this->session->setFlashdata('errormessage', 'You cannot upload a video because you do not have a faculty assigned.');

            // Redirect with the error message
            return redirect()->to('UplodeVideo');
        }

        // Get uploaded files
        $image = $this->request->getFile('imageFile');
        $video = $this->request->getFile('videoFile');
       
       
        $id=$registerId;
        $studentname=$facultyModel->getname($id);
        $id=$assignTeacherId;
        $facultyname=$facultyModel->getname($id);


        // Check if an image was uploaded
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getName();
            $image->move(ROOTPATH . 'public/uploads/images/studentUploadedImages', $imageName);


            // Save image name, Assign_Teacher_id, and registerId to the database
            $StudentModel->insert(['name' => $imageName, 'type' => 'image', 'Faculty_id' => $assignTeacherId, 'register_id' => $registerId, 'Student_name' => $full_name]);
            $wherecond = ['id' => $assignTeacherId];
            $facultyMobileNumber = $model->get_single_data('register', $wherecond);
            $phoneNumber=$facultyMobileNumber->mobileWithCode;
            $templates = "930840461869403";
        //    $msg = "You have new video/images from student";
           $msg = "Hello $facultyname, You've student $studentname successfully uploaded a practice video/image!";

            whatsapp($phoneNumber, $templates, $msg);
            $templates = "930840461869403";
            $msg = "new Video uploded By $studentname to faculty $facultyname";
            whatsappadmin($templates, $msg);
            // Set success message in session
            $session->setFlashdata('success', 'Image uploaded successfully.');
        }

        // Check if a video was uploaded
        if ($video && $video->isValid() && !$video->hasMoved()) {
            $videoName = $video->getName();
            $video->move(ROOTPATH . 'public/uploads/StudentStudyvideos', $videoName);

            // Save video name, Assign_Teacher_id, and registerId to the database
            $StudentModel->insert(['name' => $videoName, 'type' => 'video', 'Faculty_id' => $assignTeacherId, 'register_id' => $registerId, 'Student_name' => $full_name]);
            $wherecond = ['id' => $assignTeacherId];
            $facultyMobileNumber = $model->get_single_data('register', $wherecond);
            $phoneNumber=$facultyMobileNumber->mobileWithCode;

            $templates = "930840461869403";
            $msg ="Hello $facultyname, You've student $studentname successfully uploaded a practice video/image!";
            whatsapp($phoneNumber, $templates, $msg);
            $templates = "930840461869403";
            $msg = "new Video uploded By $studentname to faculty $facultyname";
            whatsappadmin($templates, $msg);
            // Set success message in session
            $session->setFlashdata('success', 'Video uploaded successfully.');
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
        $result = session();
        $session_id = $result->get('id');
        $session_type = $result->get('SessionType');
        $wherecond = '';

        $model = new AdminModel();
        $data['session_id'] = $session_id;

        if ($session_type != 'OneToOneSession') {
            $wherecond = "FIND_IN_SET('$session_id', groupstudentname) > 0";
        } else {
            $wherecond = array('student_id' => $session_id);
        }

        $data['schedule_data'] = $model->getalldata('tbl_student_shedule', $wherecond);

        return view('StudentSidebar/ScheduleStudent', $data);
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
            'register.id ' => $registerId,
        ];

        $data['profileData'] = $model->joinfourtablessingle($select1, 'register ', 'tbl_courses ', 'tbl_sub_courses', 'countries',  $joinCond5, $joinCond6, $joinCond, $wherecond);

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
        if ($countryList['list']) {
            $session = session();
            $session->setFlashdata('success', 'Country changed successfully');
        } else {
            $session = session();
            $session->setFlashdata('errormessage', 'Error while changing country. ');
        }
        return redirect()->to('StudentProfile');
    }

    public function StudentSelectClassDates()
    {
        $result = session();
        $registerId = $result->get('id');


        // echo $registerId ;exit();
        $StudentModel = new StudentModel();
        $model = new AdminModel();

        $Sheduledatafromfaculty =  $StudentModel->fetchid($registerId);
        // echo "<pre>";print_r($Sheduledatafromfaculty);exit();
        $data[] = '';

        if (!empty($Sheduledatafromfaculty)) {

            $assignTeacherId = $Sheduledatafromfaculty->Assign_Techer_id;
            $wherecond = array('faculty_registerid' => $assignTeacherId);

            $data['fshedules'] =  $model->getalldata('schedule_list', $wherecond);
            // echo "<pre>";print_r($data);exit();


            $wherecond = array('faculty_registerid' => $assignTeacherId);

            // $data['schedule_data'] =  $model->getalldata('schedule_list', $wherecond);

            $wherecond1 = array('student_id' =>  $registerId);
            $data['single'] = $model->getsinglerow('tbl_student_shedule', $wherecond1);


                // echo "<pre>";print_r($_SESSION);exit();
            $wherecond2 = array('faculty_id' => $assignTeacherId);
            $session_type = $result->get('SessionType');

            $wherecond3 = '';


            if ($session_type != 'OneToOneSession') {
                $wherecond3 = "FIND_IN_SET('$registerId', groupstudentname) > 0";
            } else {
                $wherecond3 = array('student_id' => $registerId);

                
            }

            $data['schedule_data'] = $model->getalldata('tbl_student_shedule',$wherecond3);


            $data['slot_data'] =  $model->getalldata('tbl_student_shedule', $wherecond2);

            // echo "<pre>";print_r($data['slot_data']);exit();

        }
        return view('StudentSidebar/StudentSelectClassDates', $data);
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
        $id = $_SESSION['sessiondata']['id'];
        $model = new AdminModel();
        $wherecond = array('register_id' => $id);
        $result = $model->getsinglerow('student', $wherecond);
        $student_id = $result->student_id;
        $insertdata = array(
            'student_id' => $student_id,
            'faculty_id' => $_POST['faculty_id'],
            'rating' => $_POST['rating'],
            'review_message' => $_POST['review_message']
        );

        $result = $model->insert_formdata('id', 'feedback', $insertdata);
        if ($result) {
            session()->setFlashdata('success', 'Feedback submitted!');
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

    public function get_shedule_data_for_student()
    {

//         $postData = $this->request->getPost();
// echo "<pre>"; print_r($postData); exit();
        $selectedDays = $this->request->getPost('selectedDays');

        // echo "hiii";

        // echo "<pre>";print_r($selectedDays);exit();

        $result = session();
        $registerId = $result->get('id');

        $StudentModel = new StudentModel();
        $model = new AdminModel();

        $Sheduledatafromfaculty = $StudentModel->fetchid($registerId);

        $assignTeacherId = '';
        if (!empty($Sheduledatafromfaculty)) {
            $assignTeacherId = $Sheduledatafromfaculty->Assign_Techer_id;
        }
        // $wherecond = array('faculty_registerid' => $assignTeacherId);

        //     $data['fshedules'] =  $model->getalldata('schedule_list', $wherecond);
      

        $currentYear = date('Y');
        $currentMonth = date('m');
        $startDate = "{$currentYear}-{$currentMonth}-01 00:00:00";
        $endDate = date('Y-m-t 23:59:59', strtotime($startDate));

        // Prepare the WHERE condition for the query
        $wherecond = [
            'faculty_registerid' => $assignTeacherId,
            'days' =>$selectedDays
            // 'start_date >= ' => $startDate,
            // 'end_date <= ' => $endDate,
        ];
// echo $this->request->getPost('selectedDays');

        $shedule_data = $model->getalldataforstudent('schedule_list', $wherecond, $selectedDays);

        if (!empty($shedule_data)) {
            return json_encode($shedule_data);
        } else {
            return json_encode([]);
        }
    }

    public function check_slot_availability()
    {
        // print_r($_POST);die;
        $selectedSlot = $this->request->getPost('selectedSlot');
        $teacherId = $this->request->getPost('teacherId');
        $studentModel = new StudentModel();
        $availability = $studentModel->checkSlotAvailability($selectedSlot,  $teacherId);
        // $result = $availability['records'];

        return $this->response->setJSON($availability);
    }


    // public function selectslotsbystudent()
    // {

    //     $model = new AdminModel();
    //     $wherecond = ['student_id' => $this->request->getVar('student_id')];
    //     $single = $model->getsinglerow('tbl_student_shedule', $wherecond);
    //     $startTime = '';
    //     $endTime = '';

    //     $db = \Config\Database::Connect();

    //     // Extract start and end times from 'shedules_time'
    //     $sheduleTimes = explode(' - ', $this->request->getVar('shedules_time'));

    //     if (isset($sheduleTimes[0]) && isset($sheduleTimes[1])) {
    //         $startTime = $sheduleTimes[0];
    //         $endTime = $sheduleTimes[1];
    //     }

    //     $selectedDaysArray = $this->request->getVar('days[]');
    //     $selectedDaysString = implode(',', $selectedDaysArray);


    //     $data = [
    //         'student_id' => $this->request->getVar('student_id'),
    //         'faculty_id' => $this->request->getVar('faculty_id'),
    //         'days' => $selectedDaysString,
    //         'start_date' => $this->request->getVar('start_date'),
    //         'end_date' => $this->request->getVar('end_date'),
    //         'shedules_time' => $this->request->getVar('shedules_time'),
    //         'start_time' => $startTime,
    //         'end_time' => $endTime,
    //         'created_on' => date('Y:m:d H:i:s'),
    //     ];

    //     $isAvailable = $this->checkAvailability($data);


    //     if ($isAvailable) {
    //         if (empty($single)) {
    //             $add_data = $db->table('tbl_student_shedule');
    //             $add_data->insert($data);
    //             session()->setFlashdata('success', 'Data added successfully.');
    //         } else {
    //             $selectedDaysArray = $this->request->getVar('days[]');

    //             $selectedDaysArray[] = $single->days;

    //             $selectedDaysString = implode(',', $selectedDaysArray);

    //             $datas = [
    //                 'student_id' => $this->request->getVar('student_id'),
    //                 'faculty_id' => $this->request->getVar('faculty_id'),
    //                 'days' => $selectedDaysString,
    //                 'start_date' => $single->start_date,
    //                 'end_date' => $single->end_date,
    //                 'shedules_time' => $single->shedules_time,
    //                 'start_time' => $single->start_time,
    //                 'end_time' => $single->end_time,
    //             ];

    //             $update_data = $db->table('tbl_student_shedule')->where('student_id', $this->request->getVar('student_id'));
    //             $update_data->update($datas);
    //             session()->setFlashdata('success', 'Data updated successfully.');
    //         }
    //     } else {
    //         session()->setFlashdata('errormessage', 'Selected days and time are not available.');
    //     }

    //     return redirect()->to('SelectDate');
    // }
    public function selectslotsbystudent()
    {
        $model = new AdminModel();
        // $wherecond = ['student_id' => $this->request->getVar('student_id')];
        // $single = $model->getsinglerow('tbl_student_shedule', $wherecond);
        $startTime = '';
        $endTime = '';
    
        $db = \Config\Database::Connect();
    
        // Extract start and end times from 'shedules_time'
        $sheduleTimes = explode(' - ', $this->request->getVar('shedules_time'));
    
        if (isset($sheduleTimes[0]) && isset($sheduleTimes[1])) {
            $startTime = $sheduleTimes[0];
            $endTime = $sheduleTimes[1];
        }
    
        $selectedDaysArray = $this->request->getVar('days[]');
        $selectedDaysString = implode(',', $selectedDaysArray);
    
        $data = [
            'student_id' => $this->request->getVar('student_id'),
            'faculty_id' => $this->request->getVar('faculty_id'),
            'days' => $selectedDaysString,
            'start_date' => $this->request->getVar('start_date'),
            'end_date' => $this->request->getVar('end_date'),
            'shedules_time' => $this->request->getVar('shedules_time'),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'created_on' => date('Y:m:d H:i:s'),
        ];
    
        $isAvailable = $this->checkAvailability($data);
    
        $student_id = $this->request->getVar('student_id');
        $faculty_id = $this->request->getVar('faculty_id');
        if ($isAvailable) {
            if (empty($single)) {
                $add_data = $db->table('tbl_student_shedule');
                $add_data->insert($data);
                $wherecond = ['id' => $student_id];
                $wherecond1 = ['id' => $faculty_id];


                $studentMobileNumber = $model->get_single_data('register', $wherecond);
                $facultyMobileNumber = $model->get_single_data('register', $wherecond1);
                // echo "<pre>";print_r($facultyMobileNumber);die;
                $phoneNumber = '';
                $phoneNumber = '';

            if(!empty($studentMobileNumber)){
                        $phoneNumber = $studentMobileNumber->mobile_no;
            }
                $templates = "930840461869403";
                $msg = "You selected slots  successfully. session start at $startTime and and on  $endTime  this time will same for all sessions";
                whatsapp($phoneNumber, $templates, $msg);

                if($facultyMobileNumber){
    
                $phoneNumber = $facultyMobileNumber->mobile_no;
                }
                $templates = "930840461869403";
                $msg = "A student has selected slots. Please be prepared.session start at  $startTime End on $endTime this time will same for all sessions";
                whatsapp($phoneNumber, $templates, $msg);
    
               // $phoneNumber = "917588525387";
                $templates = "930840461869403";
                $msg = "student has selected slots.";

                whatsappadmin($templates, $msg);
    
                session()->setFlashdata('success', 'Data added successfully.');
            } else {
                // $selectedDaysArray = $this->request->getVar('days[]');
    
                // $selectedDaysArray[] = $single->days;
    
                // $selectedDaysString = implode(',', $selectedDaysArray);
    
                // $datas = [
                //     'student_id' => $student_id,
                //     'faculty_id' => $faculty_id,
                //     'days' => $selectedDaysString,
                //     'start_date' => $single->start_date,
                //     'end_date' => $single->end_date,
                //     'shedules_time' => $single->shedules_time,
                //     'start_time' => $single->start_time,
                //     'end_time' => $single->end_time,
                // ];
    
                $update_data = $db->table('tbl_student_shedule')->where('student_id', $student_id);
                $update_data->update($data);
                $wherecond = ['id' => $student_id];
                $wherecond1 = ['id' => $faculty_id];
                $studentMobileNumber = $model->get_single_data('register', $wherecond);
                $facultyMobileNumber = $model->get_single_data('register', $wherecond1);
                $phoneNumber = '';
                $phoneNumber = '';
                if(!empty($studentMobileNumber)){
                    $phoneNumber = $studentMobileNumber->mobile_no;
        }
        $templates = "930840461869403";
        $msg = "You selected slots  successfully. session start at $startTime and and on  $endTime  this time will same for all sessions";
        whatsapp($phoneNumber, $templates, $msg);

            if($facultyMobileNumber){

            $phoneNumber = $facultyMobileNumber->mobile_no;
            }
            $templates = "930840461869403";
                $msg = "A student has selected slots. Please be prepared.session start at  $startTime End on $endTime this time will same for all sessions";
                whatsapp($phoneNumber, $templates, $msg);
                
              //  $phoneNumber = "917588525387";
                $templates = "930840461869403";
                $msg = "student has selected slots.";

                whatsappadmin($templates, $msg);
                session()->setFlashdata('success', 'Data updated successfully.');
            }
        } else {
            session()->setFlashdata('errormessage', 'Selected days and time are not available.');
        }
    
        return redirect()->to('SelectDate');
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
    public function getStudyVideo($registerId)
    {
        $StudentModel = new StudentModel();
        $res = $StudentModel->getStudyVideo($registerId);
        if ($res) {
            return $res;
        } else {
            return false;
        }
    }

    public function StudentAttendancerecord()
    {
        $result = session();
        $registerId = $result->get('id');
        $model = new StudentModel();
        $attendance['attendance'] = $model->getattandance($registerId);
    // echo '<pre>';print_r($attendance['attendance']);die;
        // Load the view and pass the $attendance data to it
        return view('StudentSidebar/studentAttenadnace', $attendance);
    }
    public function submit_review() {
      //  print_r($_POST);die;
      $result = session();
      $registerId = $result->get('id');
        $model = new StudentModel();
        $modell = new AdminModel();
        $facultyModel =new FacultyModel();
        $data = [
            'rating' => $this->request->getPost('rating'),
            'student_id' => $this->request->getPost('student_id'),
            'Session_no' => $this->request->getPost('Session_no'),
            'faculty_id' => $this->request->getPost('faculty_id'),
            'course' => $this->request->getPost('course'),
            'sub_course' => $this->request->getPost('sub_course')
        ];
        
        $model->insertfeedback($data);
       
        $varify =[
            'verify_by_student' => $this->request->getPost('verify_by_student'),
            'student_id' => $this->request->getPost('student_id'),
            'Session_no' => $this->request->getPost('Session_no'),
        ] ;

        $model->insertvarify($varify);
        $wherecond = ['id' => $registerId];
        $id=$registerId ;
        $studentname=$facultyModel->getname($id);
        $studentMobileNumber = $modell->get_single_data('register', $wherecond);
        $phoneNumber=$studentMobileNumber->mobileWithCode;
        if($studentMobileNumber){

            $phoneNumber = $studentMobileNumber->mobileWithCode;
            }
            $templates = "930840461869403";
            $msg = "Hello $studentname, Thank you so much for marking your attendance. Your participation is greatly appreciated!";

            whatsapp($phoneNumber, $templates, $msg);
        return redirect()->to('StudentAttendancerecord');
    }
    public function Coupon_Codes()
    {
        $model = new AdminModel();
        $data['Coupan_code'] =$model->getallCoupan_code();
      //  print_r($data['Coupan_code']);die;
        return view('StudentSidebar/Coupon_Codes',$data);
    }
    }
  
