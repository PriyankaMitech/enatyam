<?php

namespace App\Controllers;

use App\Models\facultymodel;
use App\Models\AdminModel;
use App\Models\StudentModel;
use CodeIgniter\Controller;

class FacultyController extends BaseController
{
  public function facultyinfo()
  {
    $studentId = $this->request->getVar('student_id');
    $facultymodel = new facultymodel();

    $studentData = $facultymodel->getStudentData($studentId);

    // Pass the student data to the view
    //   print_r($studentData);die;
    return view('facultyinfo', ['studentData' => $studentData]);

    // return view('facultyinfo');
  }


  public function addlink()
  {
    $segment_2 =  base64_decode($this->request->uri->getSegment(2));

    $facultymodel = new facultymodel();


    // Pass the student data to the view
    // print_r($studentData);die;
    return view('addlink');

    // return view('facultyinfo');
  }


  public function fetchDataByAssignTeacherId()
  {
    $model = new AdminModel();
    // echo "<pre>";print_r($_SESSION);exit();

    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {
        $teacherId = $this->session->get('id');
        $facultymodel = new Facultymodel();
        $adminModel = model('AdminModel');

        $todaysession = $facultymodel->gettodayssessiontofaculty($teacherId);
        
        // print_r($todaysession);die;
        $data = $facultymodel->where('Assign_Techer_id', $teacherId)->findAll();
        $wherecond1 = array('id' => $teacherId);



        $loginsingel_data = $model->getsinglerow('register', $wherecond1);


        $wherecond = '';
        if (!empty($loginsingel_data)) {
          $wherecond = ['faculty_id_g' => $loginsingel_data->id];
        }


        $select = 'tbl_group.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name, register.full_name as name';
        $joinCond = 'tbl_group.courses_id_g = tbl_courses.id';
        $joinCond1 = 'tbl_group.sub_courses_id_g = tbl_sub_courses.id';
        $joinCond3 = 'tbl_group.faculty_id_g = register.id';

        $group_data = $model->joinfourtables($select, 'tbl_group', 'tbl_courses', 'tbl_sub_courses', 'register',  $joinCond, $joinCond1, $joinCond3, $wherecond, 'DESC');


        $todayDate = date('Y-m-d H:i:s');
        $displayedNotificationCount = 0;
        $conductedClasses= $facultymodel->conductedClasses($teacherId);
        return view('faculty', [
          'data' => $data,
          'todaysession' => $todaysession,
          'conductedClasses'=>$conductedClasses,
          'group_data' => $group_data,
          'notificationCount' => $displayedNotificationCount,
        ]);

        // echo "<pre>";print_r($group_data);exit();

      }
    }


    return redirect()->to(base_url());
  }

  public function index()
  {
    return view('sendEmail');
  }

  public function uploadVideo()
{
    date_default_timezone_set('Asia/Kolkata');
    $data = session();
    $studentId = $this->request->getPost('student_id');
    $registerId =  $data->get('id');
    $facultyModel = new FacultyModel();
    $model = new AdminModel();
    $videoFile = $this->request->getFile('videoFile');
    $type = $_FILES['videoFile']['type'];
    $fileName = $_FILES['videoFile']['name'];

    $videoFilename = $videoFile->getName();

    switch ($type) {
        case 'image/gif':
        case 'image/jpg':
        case 'image/png':
        case 'image/jpeg':
            $videoFile->move(ROOTPATH . 'public\uploads\images\facultyUploadedImages');
            $videoFilename = $videoFile->getName();
            break;
        case 'avi':
        case 'flv':
        case 'wmv':
        case 'mp3':
        case 'mp4':
        case 'video/mp4':
        case 'wma':
            $videoFile->move(ROOTPATH . 'public\uploads\FacultyUplodedVideos');
            break;
    }

    $facultyModel->updateStudentVideo($studentId, $registerId, $fileName);
    $wherecond = ['student_id' => $studentId];
    $wherecond1 = ['id' => $registerId];

    // Get faculty mobile number
    $facultyMobileNumber = $model->get_single_data('register', $wherecond1);
    $studentMobileNumber = $model->get_single_data('student', $wherecond); 
    $name = $studentMobileNumber->student_name;
    if (!empty($facultyMobileNumber)) {
   
        $phoneNumber = $facultyMobileNumber->mobileWithCode;
        $templates = "930840461869403";
        $msg = "uploaded video/image  to student $name";
        whatsapp($phoneNumber, $templates, $msg);
    }
    // Get student mobile number 
    if (!empty($studentMobileNumber)) {
        $phoneNumber = $studentMobileNumber->mobileWithCode;
       
        $templates = "930840461869403";
        $msg = "uploaded video/image  by faculty to you.";
        whatsapp($phoneNumber, $templates, $msg);
    }

    // Send message to admin
  //  $phoneNumber = "917588525387";
    $msg = "Faculty has uploaded video/image to student $name";
    $templates = "930840461869403";
    whatsappadmin($templates, $msg);

    return redirect()->to('FacultyDashboard');
}

  
  public function fetchvideotostudentdashboard()
  {
    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {
        $session = session();
        $registerId = $session->get('id');

        $facultyModel = new FacultyModel();
        $videos = $facultyModel->getVideosByRegisterId($registerId);
        $stdvideos = $facultyModel->getstudentvideo($registerId);
        // print_r($videos);die;
        return view('StudentSideBarVideo', ['videos' => $videos, 'stdvideos' => $stdvideos, 'registerId' => $registerId]);
      } else {
        return redirect()->to(base_url());
      }
    } else {
      return redirect()->to(base_url());
    }
  }

  public function uploaded_images()
  {
    if (isset($_SESSION['sessiondata'])) {
      $session = session();
      $registerId = $session->get('id');
      $facultyModel = new FacultyModel();
      $videos = $facultyModel->getVideosByRegisterId($registerId);
      $stdvideos = $facultyModel->getstudentvideo($registerId);

      // echo "<pre>";print_r($videos);exit();
      return view('uploaded_images', ['videos' => $videos]);
    } else {
      return redirect()->to(base_url());
    }
  }

  public function StudentuplodedVidio()
  {
    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {
        $model = new AdminModel();
        $result = session();
        $registerId = $result->get('id');
        $db = \Config\Database::connect();
        $table = $db->table('uplode_study_video_from_student');
        $query = $table->where('Faculty_id', $registerId)->get();

        $data['results'] = $query->getResult();
        $data['dataFound'] = count($data['results']) > 0;
        $data['studentList'] = $model->getStudentData();
        return view('StudentuplodedVidio', $data);
      }
    }
    // Show the page even if session data is not set
    return view('StudentuplodedVidio', ['dataFound' => false]);
  }

  public function MonthlyCalendar()
  {
    $facultyModel = new FacultyModel();
    $adminModel = new AdminModel();
    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {

        $session = session();
        $registerId = $session->get('id');
        $wherecond = array('USER_ID' => $_SESSION['sessiondata']['id']);
        $result['registerId'] = $session->get('id');
        $result['faculty_slots'] = $facultyModel->getFacultySlots($registerId);
        // echo '<pre>';print_r($result['faculty_slots']);die;
        return view('FacultysideBar/MonthlyCalendar', $result);
      } else {
        return redirect()->to(base_url());
      }
    } else {
      return redirect()->to(base_url());
    }
  }


  public function saveschedule()
  {
    if ($this->request->getMethod() === 'post') {
      $facultyId = $this->request->getPost('faculty_register_id');
      $formDay = $this->request->getPost('form_day');
      $formTime = $this->request->getPost('form_time');
      $toTime = $this->request->getPost('to_time');
      $facultyModel = new FacultyModel();
      $dataExists = $facultyModel->checkDataExists($facultyId, $formDay, $formTime, $toTime);

      if ($dataExists) {
        return redirect()->to('SelectSlot')->with('error', 'Data already exists.');
      } else {
        $data = [
          'faculty_register_id' => $facultyId,
          'Day' => $formDay,
          'start_time' => $formTime,
          'end_time' => $toTime,
        ];


        // echo "<pre>";print_r($data);exit();

        $facultyModel->insertAppointments($data);
        return redirect()->to('SelectSlot');
      }
    } else {
      // Handle non-POST requests (optional).
    }
  }

  public function checkData()
  {
    $facultyId = $this->request->getPost('faculty_register_id');
    $formDay = $this->request->getPost('form_day');
    $formTime = $this->request->getPost('form_time');
    $toTime = $this->request->getPost('to_time');

    // Perform a database query to check if the data exists
    $facultyModel = new FacultyModel();
    $exists = $facultyModel->checkDataExists($facultyId, $formDay, $formTime, $toTime);
    // print_r($exists);die;
    // Return a JSON response
    $this->response->setJSON(['exists' => $exists]);
    return $this->response;
  }
  public function fetchTofacultyShuduleSidebar()
  {

    $result = session();
    $session_id = $result->get('id');
    $model = new AdminModel();
    $data['session_id'] = $session_id;
    $wherecond = array('faculty_id' => $session_id);

    $data['schedule_data'] = $model->getalldataslots('tbl_student_shedule', $wherecond);
    echo view('FacultysideBar/Monthlyshedule', $data);
  }

  public function StudentAttendance()
  {
    $result = session();
    $registerId = $result->get('id');
    $model = new facultymodel();
    $data['studentList'] = $model->getStudentList($registerId);
    $data['GroupList'] = $model->getGroupList($registerId);
   
    // print_r($data['studentList']);die;
    // echo '<pre>'; print_r($data['GroupList']);die;
    return view('FacultysideBar/Studentattendance', $data);
  }



  public function get_all_notification()
  {
    return view('notification');
  }

  public function submitAttendance()
  {
    // print_r($_POST);die;
      $result = session();
      $registerId = $result->get('id');

      $model = new Facultymodel();
      $adminmodel = new AdminModel(); 
      $data = [
          'student_registerid' => $this->request->getPost('studentId'),
          'Attendance_status'  => $this->request->getPost('attendance'),
          'Session_no'         => $this->request->getPost('session'),
          'faculty_id'         =>$registerId,
           'payment_id'  => $this->request->getPost('payment_id'),

      ];
      // print_r($data);die;
      $result = $model->insertAttendance($data);
      $student_registerid = $this->request->getPost('studentId');
      $Attendance_status = $this->request->getPost('attendance');
      $sessionno= $this->request->getPost('session');
      if ($Attendance_status == 'p') {
          $stetus = 'present';
      } elseif ($Attendance_status == 'a') {
          $stetus = 'apsend';
      } 
      $wherecond = ['id' => $student_registerid];
      $studentMobileNumber = $adminmodel->get_single_data('register', $wherecond);
  
      if ($result) {
          $phoneNumber = (!empty($studentMobileNumber)) ? $studentMobileNumber->mobileWithCode : '';
          $templates = "930840461869403";
          $msg = "Your attendance has been recorded successfully. You $stetus in session no .$sessionno";
          whatsapp($phoneNumber, $templates, $msg);
          $templates = "930840461869403";

         // $phoneNumber = "917588525387";
          $msg = "Attendance has been taken by faculty. Status of session is $stetus and session no is $sessionno";
          whatsappadmin($templates, $msg);
          $response = ['success' => true, 'message' => 'Attendance added successfully.'];
      } else {
          $response = ['success' => false, 'message' => 'Attendance not added.'];
      }
      return $this->response->setJSON($response);
  }
  public function save_schedule_data()
  {
    $model = new facultymodel();
    $Adminmodel = new AdminModel();
    $result = $model->save_schedule_data();

    if ($result != false) {
      session()->setFlashdata('success', 'Schecule added successfully.');
    } else {
      session()->setFlashdata('success', 'Schedule not added.');
    }

    return redirect()->to('SelectSlot');
  }
  public function giveschedule()
  {
    $result = session();
    $session_id = $result->get('id');

    $model = new AdminModel();
    $data['session_id'] = $session_id;
    $wherecond = array('faculty_registerid' => $session_id);

    $data['schedule_data'] = $model->getalldata('schedule_list', $wherecond);


    $data['single'] = $model->getsinglerow('schedule_list', $wherecond);

    // echo "<pre>";print_r($data['schedule_data']);exit();


    echo view('schedule/index', $data);
  }

  // public function save_schedule()
  // {

  //   $model = new AdminModel();
  //   $wherecond = array('faculty_registerid' => $this->request->getVar('id'));
  //   $data['schedule_data'] = $model->getalldata('schedule_list', $wherecond);
  //   $single = $model->getsinglerow('schedule_list', $wherecond);
  //   $db = \Config\Database::Connect();
  //   if (empty($single)) {
  //     $selectedDaysArray = $this->request->getVar('days[]'); // Assuming days[] is an array from the form
  //     $selectedDaysString = implode(',', $selectedDaysArray);
  //     $data = [
  //       'faculty_registerid' => $this->request->getVar('session_id'),
  //       'days' => $selectedDaysString,
  //       'start_date' => $this->request->getVar('start_date'),
  //       'end_date' => $this->request->getVar('end_date'),
  //       'start_time' => $this->request->getVar('start_time'),
  //       'end_time' => $this->request->getVar('end_time'),
  //       'created_on' => date('Y:m:d H:i:s'),
  //     ];
  //     $add_data = $db->table('schedule_list');
  //     $add_data->insert($data);
  //     session()->setFlashdata('success', 'Schedule added successfully.');
  //   } else {

  //     $selectedDaysArray = $this->request->getVar('days[]');

  //     $selectedDaysArray[] = $single->days;

  //     $selectedDaysString = implode(',', $selectedDaysArray);

  //     $data = [
  //       'faculty_registerid' => $this->request->getVar('session_id'),
  //       'days' => $selectedDaysString,
  //       'start_date' => $single->start_date,
  //       'end_date' => $single->end_date,
  //       'start_time' => $single->start_time,
  //       'end_time' => $single->end_time,
  //     ];

  //     $update_data = $db->table('schedule_list')->where('faculty_registerid', $this->request->getVar('id'));
  //     $update_data->update($data);
  //     session()->setFlashdata('success', 'Schedule updated successfully.');
  //   }

  //   return redirect()->to('giveschedule');
  // }
  public function save_schedule()
  {
    
      $model = new AdminModel();
      $wherecond = array('faculty_registerid' => $this->request->getVar('id'));
      $data['schedule_data'] = $model->getalldata('schedule_list', $wherecond);
      $single = $model->getsinglerow('schedule_list', $wherecond);
      $db = \Config\Database::Connect();
  
      if (empty($single)) {
          // Insert schedule data
          $selectedDaysArray = $this->request->getVar('days[]');
          $selectedDaysString = implode(',', $selectedDaysArray);
          $data = [
              'faculty_registerid' => $this->request->getVar('session_id'),
              'days' => $selectedDaysString,
              'start_date' => $this->request->getVar('start_date'),
              'end_date' => $this->request->getVar('end_date'),
              'start_time' => $this->request->getVar('start_time'),
              'end_time' => $this->request->getVar('end_time'),
              'created_on' => date('Y:m:d H:i:s'),
          ];
  
          $add_data = $db->table('schedule_list');
          $add_data->insert($data);
  
          // Fetch mobile number from register table
          $facultyData = $model->getsinglerow('register', ['id' => $this->request->getVar('session_id')]);
          $mobileNumber = $facultyData->mobile_no;
  
          session()->setFlashdata('success', 'Schedule added successfully. Mobile Number: ' . $mobileNumber);
      } else {
          // Update schedule data
          $selectedDaysArray = $this->request->getVar('days[]');
          $selectedDaysArray[] = $single->days;
          $selectedDaysString = implode(',', $selectedDaysArray);
  
          $data = [
              'faculty_registerid' => $this->request->getVar('session_id'),
              'days' => $selectedDaysString,
              'start_date' => $single->start_date,
              'end_date' => $single->end_date,
              'start_time' => $single->start_time,
              'end_time' => $single->end_time,
          ];
  
          $update_data = $db->table('schedule_list')->where('faculty_registerid', $this->request->getVar('id'));
          $update_data->update($data);
  
          // Fetch mobile number from register table
          $facultyData = $model->getsinglerow('register', ['id' => $this->request->getVar('session_id')]);
          $mobileNumber = $facultyData->mobile_no;
      // print_r($mobileNumber);die;
       $phoneNumber = $mobileNumber;
       $templates = "930840461869403";
       $msg ="your register succesfully";
       whatsapp($phoneNumber, $templates, $msg);
      // $adminNumber = "917588525387";
       $templates = "930840461869403";
       $msg = "Faculty give slots";
       whatsappadmin($templates, $msg);
          session()->setFlashdata('success', 'Schedule updated successfully. Mobile Number: ');
      }
  
      return redirect()->to('giveschedule');
  }
  

  public function sendmeetinglink()
  {
    $result = session();
    $session_id = $result->get('id');
    $link = $this->request->getPost('linkInput');
    $id = $this->request->getPost('student_registerid');
    $model = new facultymodel();
    $modell = new AdminModel();
    $meetLinkUpdated = $model->updatemeeetlink($id, $link);
    $studentdataData = $modell->getsinglerow('register', ['id' => $id]);
    $mobileNumber = $studentdataData->mobileWithCode;
    if ($meetLinkUpdated == 1) {
      $phoneNumber = $mobileNumber;
      $templates = "930840461869403";
      $msg ="This session $link link send from faculty and its Valid for all sessions join this link for all sessions ";
      whatsapp($phoneNumber, $templates, $msg);
      session()->setFlashdata('success', 'Link added successfully.');
    } else {
      session()->setFlashdata('success', 'Failed to update link.');
    }

    return redirect()->to('FacultyDashboard');
  }


  public function setlinkforgroup()
  {
    // echo "<pre>";print_r($_POST);exit();
    $model = new AdminModel();

    $data = [

      'meetlink' => $this->request->getVar('linkInput'),
    ];

    $db = \Config\Database::Connect();
    if ($this->request->getVar('group_name') != "") {

      $update_data = $db->table('tbl_student_shedule')->where('groupname', $this->request->getVar('group_name'));
      $update_data->update($data);

      $wherecond1   = ['id' => $this->request->getVar('faculty_id')];

      $faculty_data = $model->getsinglerow('register', $wherecond1);
      
      $link = $this->request->getVar('linkInput');
      $groupname = $this->request->getVar('group_name');
          //   print_r($faculty_data);die;
      if($faculty_data){
              $phoneNumber = (!empty($faculty_data)) ? $faculty_data->mobileWithCode : '';
              $msg = "This session " . $link . " link send from student succefully.";
              $templates = "930840461869403";
              whatsapp($phoneNumber,$templates,$msg);
      
      }
          $templates = "930840461869403";
          $msg = "This session " . $link . " link sent from faculty and it's valid for all sessions for this ".$groupname. "Join this link for all sessions.";

          whatsappadmin($templates, $msg);

          $wherecond = array('is_deleted' => 'N', 'group_name' => $this->request->getVar('group_name'));
          $groupData = $model->get_single_data('tbl_group', $wherecond);
      
          if (!empty($groupData)) {
            $group_id = $groupData->id;
            $studentIdsString = $groupData->student_id;
      
            $getstudentids = explode(',', $studentIdsString);
          }
      
          foreach ($getstudentids as $studentId) {
                // $wherecond1 = array('is_deleted' => 'N', 'register_id' => $studentId);
                $wherecond1 = array('register_id' => $studentId);
      
                $studentData = $model->get_single_data('student', $wherecond1);
      
                if (!empty($studentData)) {
      
                  // Update database with file information for each student
      
      
                  $phoneNumber = (!empty($studentData)) ? $studentData->mobileWithCode : '';
      
                  $msg = "This session " . $link . " link sent from faculty and it's valid for all sessions for this ".$groupname. "Join this link for all sessions.";
                  // $msg = "Group Created Successfully by " . session('sessiondata')['user_name'] . ". The group name is '" . $this->request->getVar('group_name') . "'. This group is assigned to you.";
                  $templates = "930840461869403";
                  whatsapp($phoneNumber,$templates,$msg);
      
                }
              }
      

      session()->setFlashdata('success', 'link added successfully.');
    } else {

      session()->setFlashdata('success', 'link not added successfully.');
    }


    return redirect()->to('addlink');
  }


  public function fetchImagesToStudentDashboard()
  {
    if (isset($_SESSION['sessiondata'])) {
      $session = session();
      $registerId = $session->get('id');
      $sessionData = $_SESSION['sessiondata'];
      $Assign_Techer_id = $sessionData['Assign_Techer_id'];
      // print_r($Assign_Techer_id);
      // die;

      $facultyModel = new FacultyModel();
      $StudentModel = new StudentModel();
      $videos = $StudentModel->getVideosByRegisterId($registerId, $Assign_Techer_id);
      $stdvideos = $facultyModel->getstudentvideo($registerId);
      // echo '<pre>';
      // print_r($videos);
      // print_r($stdvideos);
      // die;
      return view('StudentSidebar/StudentSideBarImages', ['videos' => $videos, 'stdvideos' => $stdvideos, 'registerId' => $registerId]);

      // echo "<pre>";print_r($videos);exit();
      return view('uploaded_images', ['videos' => $videos]);
    } else {
      return redirect()->to(base_url());
    }
  }




  public function set_videos()
  {
    $model = new AdminModel();
    $data = session();
    $faculty_id = $this->request->getPost('faculty_id');
    $group_name = $this->request->getPost('group_name');
    $studentIdsString = '';
    $getstudentids = [];
    $group_id = '';
    $studentidd = '';

    // Get group information
    $wherecond = array('is_deleted' => 'N', 'group_name' => $group_name);
    $groupData = $model->get_single_data('tbl_group', $wherecond);

    if (!empty($groupData)) {
      $group_id = $groupData->id;
      $studentIdsString = $groupData->student_id;

      $getstudentids = explode(',', $studentIdsString);
    }

    $facultyModel = new FacultyModel();
    $videoFile = $this->request->getFile('videoFile');

    try {
      // Check if a file was uploaded
      if ($videoFile->isValid() && !$videoFile->hasMoved()) {
        $type = $videoFile->getClientMimeType();
        $fileName = $videoFile->getName();

        switch ($type) {
          case 'image/gif':
          case 'image/jpeg':
          case 'image/png':
            $destinationPath = ROOTPATH . 'public/uploads/images/facultyUploadedImages';
            break;

          case 'video/avi':
          case 'video/flv':
          case 'video/wmv':
          case 'video/mp3':
          case 'video/mp4':
          case 'audio/wma':
            $destinationPath = ROOTPATH . 'public/uploads/FacultyUplodedVideos';
            break;

          default:
            throw new \RuntimeException('Invalid file type');
        }

        // Move the file to the destination path
        $videoFile->move($destinationPath, $fileName);
// echo "<pre>";print_r($getstudentids);exit();
        // Iterate through each student ID and update the database
        foreach ($getstudentids as $studentId) {
          // $wherecond1 = array('is_deleted' => 'N', 'register_id' => $studentId);
          $wherecond1 = array('register_id' => $studentId);

          $studentData = $model->get_single_data('student', $wherecond1);

          if (!empty($studentData)) {
            $studentidd = $studentData->student_id;

            // Update database with file information for each student
            $facultyModel->updateStudentVideoforgroup($studentidd, $faculty_id, $fileName, $group_id);


            $phoneNumber = (!empty($studentData)) ? $studentData->mobileWithCode : '';

            $msg = 'Video/Image uploaded succefully for you by '.session('sessiondata')['user_name'];
            // $msg = "Group Created Successfully by " . session('sessiondata')['user_name'] . ". The group name is '" . $this->request->getVar('group_name') . "'. This group is assigned to you.";
            $templates = "930840461869403";
            whatsapp($phoneNumber,$templates,$msg);

          }

          $wherecond1   = ['id' => $faculty_id];

          $faculty_data = $model->getsinglerow('register', $wherecond1);

              //   print_r($faculty_data);die;
          if($faculty_data){
                  $phoneNumber = (!empty($faculty_data)) ? $faculty_data->mobileWithCode : '';


                  $msg = 'Video/Image uploaded succefully.';
                  $templates = "930840461869403";
      
                          //  print_r($phoneNumber);die;
                  whatsapp($phoneNumber,$templates,$msg);

          }


          $templates = "930840461869403";
          $msg = "Video/Image uploaded succefully by faculty";

          whatsappadmin($templates, $msg);
  

        }

        return redirect()->to('FacultyDashboard');
      } else {
        throw new \RuntimeException('File upload failed');
      }
    } catch (\Exception $e) {
      // Log the error
      log_message('error', 'File Upload Error: ' . $e->getMessage());

      // Optionally, you can display a user-friendly error message
      return view('upload_error');
    }
  }

  public function studentUploadedImages()
  {
    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {
        $model = new AdminModel();
        $result = session();
        $registerId = $result->get('id');
        $db = \Config\Database::connect();
        $table = $db->table('uplode_study_video_from_student');
        $query = $table->where('Faculty_id', $registerId)->get();

        $data['results'] = $query->getResult();
        // echo '<pre>';
        // print_r($data);
        // die;
        $data['dataFound'] = count($data['results']) > 0;
        $data['studentList'] = $model->getStudentData();
        return view('StudentUploadedImages', $data);
      }
    }
    // Show the page even if session data is not set
    return view('StudentuplodedVidio', ['dataFound' => false]);
  }
  public function fshedule()
  {
    $result = session();
    $session_id = $result->get('id');
    $model = new facultymodel();
    $data['session_id'] = $session_id;
    $data['myslots']= $model->getslots($session_id);
   // print_r($data['myslots']);die;
    echo view('FacultysideBar/facultyshudule',$data);
  }

public function saveshedule()
{
  $result = session();
  $facultyId = $result->get('id');
 // print_r($_POST);die;
  $id =  $this->request->getPost('id');
  $day = $this->request->getPost('day');
  $start_date = $this->request->getPost('start_date');
  $end_date = $this->request->getPost('end_date');
  $start_time = $this->request->getPost('start_time');
  $end_time = $this->request->getPost('end_time');

  // Prepare the data to be inserted
  $data = [
     'faculty_registerid'=>$id,
      'days' => $day,
      'start_date' => $start_date,
      'end_date' => $end_date,
      'start_time' => $start_time,
      'end_time' => $end_time
  ];

  // Insert the data into the database using the model
  $model = new facultymodel();
  $adminmodel = new AdminModel();
  $model->insertshedule($data); 
  $Facultycontact = $adminmodel->Facultycontact($facultyId);
  $phoneNumber = $Facultycontact;
  $templates = "930840461869403";
  $msg ="Your slot is Added in Your schedule";
  whatsapp($phoneNumber, $templates, $msg);
 // $phoneNumber = "917588525387";
  $templates = "959322439105873";
  $msg = "New slots Given by Faculty";
  whatsappadmin($templates, $msg);
  return redirect()->to('fshedule');
}

}