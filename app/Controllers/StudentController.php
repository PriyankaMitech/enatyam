<?php

namespace App\Controllers;

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
public function profilemanagment(){
    // echo "hiii";
    $session = session();
    if ($session->has('id')) {
    $user_id = $session->get('id');
   
    // echo "$user_id"; exit();
    $login_model = new LoginModel();
 
    $data['user_data'] = $login_model->get_user_data($user_id); 

    return view('profilemanagment',$data); 
}else{
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
         return view('StudentSidebar/UplodeVideo',$data);
        } else { 
            return redirect()->to(base_url());
        }
    } else {
        return redirect()->to(base_url());
    }
}else{
    return view('home');
}
}
public function uploadMedia()
{ 
    $result = session();
  
    $registerId = $result->get('id');
//    print_r($registerId);die;
    $StudentModel = new StudentModel();
    $registerData = $StudentModel->getAllRegisterData($registerId, ['full_name', 'Assign_Techer_id']);
//    print_r($registerData);die;
    $assignTeacherId = $registerData[0]->Assign_Techer_id;
    $full_name = $registerData[0]->full_name;
// print_r($assignTeacherId);die;
if ($assignTeacherId === null) {
    // Display an error message
   echo 'You cannot upload a video because you do not have a faculty assigned.';
    
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
        $StudentModel->insert(['name' => $imageName, 'type' => 'image', 'Faculty_id' => $assignTeacherId, 'register_id' => $registerId,'Student_name' => $full_name]);
    }

    // Check if a video was uploaded
    if ($video && $video->isValid() && !$video->hasMoved()) {
        $videoName = $video->getName();
        $video->move(ROOTPATH . 'public/uploads/StudentStudyvideos', $videoName);

        // Save video name, Assign_Teacher_id, and registerId to the database
        $StudentModel->insert(['name' => $videoName, 'type' => 'video', 'Faculty_id' => $assignTeacherId, 'register_id' => $registerId,'Student_name' => $full_name]);
    }

    return redirect()->to('StudentDashboard');
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
       // print_r($_POST);die;

        $newPassword = $this->request->getPost('new_password');
        $newPassword = $this->request->getPost('conf_password');
        $email = session()->get('email');
       
          //  print_r($email);die;
            // Load the UserModel
            $StudentModel = new StudentModel();
            $data = [
                'email' => $email,
                'password' => $newPassword,
                'confirm_pass' => $newPassword,
            ];
    
       $db = \Config\Database::connect();
   
   
       $update_data = $db->table('register')->where('email',$email);
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
     //    print_r( $data['slots'] );die;
        return view('StudentSidebar/ScheduleStudent',$data);
    }

   

    public function selectStudentSchedule()
    {
        if ($this->request->getMethod() === 'post') {
            // Get the data from the form
            $student_register_Id = $this->request->getPost('register_student_id');
            $selectedAppointments = json_decode($this->request->getPost('selected_appointments'), true);
          // print_r($selectedAppointments);die;
          $StudentModel = new StudentModel();
    
            // Prepare an array of data for batch insertion
            $data = [];
            foreach ($selectedAppointments as $appointment) {
                $data[] = [
                  'register_student_id' => $student_register_Id,
                    'date' => $appointment['date'],
                    'start_time' => $appointment['formTime'],
                    'end_time' => $appointment['toTime'],
                ];
            }
      //print_r($data);die;
            $StudentModel->insertSelectedSlotdByStudents($data);
           return redirect()->to('StudentSelectClassDates'); 
        } else {
            // Handle non-POST requests (optional).
        }
    }
    public function StudentProfile() {
        $result = session();       
        $registerId = $result->get('id');
        $StudentModel = new StudentModel();
      $data['profileData'] =  $StudentModel->fetchProfileDate($registerId);
   //   print_r($data['profileData']);die;
        return view('StudentSidebar/StudentProfile',$data);
    }
    public function Studentpasswordupdate()
    {
   //    print_r($_POST);die;
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
    
           $Country = $this->request->getPost('changeCountry');
            $result = session();       
            $registerId = $result->get('id');
            $StudentModel = new StudentModel();
            $Changecountry =  $StudentModel->changeCountry($registerId,$Country);
            return redirect()->to('StudentProfile'); 
        }

        public function StudentSelectClassDates() {

            $result = session();       
            $registerId = $result->get('id');
            $StudentModel = new StudentModel();
            $registerData =  $StudentModel->fetchid($registerId);
            $assignTeacherId = $registerData->Assign_Techer_id;
            $assignFacultyData['assignFacultyData'] =  $StudentModel->fetchdataFromid($assignTeacherId );
            $data['registerId'] = $registerId;
            $data['assignFacultyData'] = $assignFacultyData;
            return view('StudentSidebar/StudentSelectClassDates',$data);
        }
        public function selectedslotsfromstudent()  {
            $registerId = $this->request->getPost('registerId');
            $selectedId = $this->request->getPost('selectedId');
            $StudentModel = new StudentModel();
            $dataToUpdate = [
                'student_register_id'=>$registerId,
            ];
            $StudentModel->updateData($selectedId, $dataToUpdate);
            return redirect()->to('SelectDate');
        }
        public function studentsessionstatus()
        {
            $result = session();       
            $registerId = $result->get('id');
            $StudentModel = new StudentModel();
            $registerData =  $StudentModel->fetchSessionsByid($registerId);
        }
}