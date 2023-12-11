<?php

namespace App\Controllers;

use App\Models\facultymodel;
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


  public function fetchDataByAssignTeacherId()
  {
    if (isset($_SESSION['sessiondata'])) {

        $sessionData = $_SESSION['sessiondata'];

        $email = $sessionData['email'] ?? null;
        $password = $sessionData['password'] ?? null;

        if ($email !== null && $password !== null) {
            $teacherId = $this->session->get('id');
            $facultymodel = new Facultymodel();
            $adminModel = model('AdminModel');

            // Fetch today's session data
            $todaysession = $facultymodel->gettodayssessiontofaculty($teacherId);
            // Fetch other data using where condition
            $data = $facultymodel->where('Assign_Techer_id', $teacherId)->findAll();
            // $notifications = $adminModel->getUserRole($teacherId);

            $todayDate = date('Y-m-d H:i:s');
            $displayedNotificationCount = 0;

            // foreach ($notifications as $key => $notification) {
            //     $notificationDate = $notification['timestamp'];
            //     if ($notificationDate >= $todayDate) {
            //         $displayedNotificationCount++;
            //     }
            // }

            return view('faculty', [
                'data' => $data,
                'todaysession' => $todaysession,
                // 'notifications' => $notifications,
                'notificationCount' => $displayedNotificationCount,
            ]);
        }

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
    // Retrieve student_id and register_id from session
    //   $session = session();
    //  $data = session()->get('data');
    $data = session();
    //   print_r($data);die;
    $studentId = $this->request->getPost('student_id');

    // $this->session->set($studentId);
    $registerId =  $data->get('id');
    // print_r($studentId);die;
    //print_r($registerId);die;
    // Create an instance of the FacultyModel
    $facultyModel = new FacultyModel();

    // Retrieve the uploaded video file
    // $videoFile = $this->request->getFile('videoFile');
    // print_r($videoFile);
    // die;

    // Get the client's original video file name
    // $videoFilename = $videoFile->getName();
    // print_r($videoFilename);
    // die;

    // Move the video file to the 'public/videos/' directory
    // $uploadDir = WRITEPATH . 'uploads/';

    //changing path

    $videoFile = $this->request->getFile('videoFile');

    $type = $_FILES['videoFile']['type'];
    // print_r($type);
    // die;
    switch ($type) {
      case 'image/gif':
      case 'image/jpg':
      case 'image/png':
        // do img config setup
        if (!$videoFile->isValid()) {
          // return $this->fail($videoFile->getErrorString());
        }

        $videoFile->move(ROOTPATH . 'public\uploads\images\facultyUploadedImages');

        $videoFilename = $videoFile->getName();


        break;
      case 'avi':
      case 'flv':
      case 'wmv':
      case 'mp3':
      case 'wma':
        // do video config
        if (!$videoFile->isValid()) {
          // return $this->fail($videoFile->getErrorString());
        }

        $videoFile->move(ROOTPATH . 'public\uploads\FacultyUplodedVideos');

        $videoFilename = $videoFile->getName();
        // print_r($videoFilename);


        break;
    }

    // if (!$videoFile->isValid()) {
    //   // return $this->fail($videoFile->getErrorString());
    // }

    // $videoFile->move(ROOTPATH . 'public\uploads\FacultyUplodedVideos');

    // $videoFilename = $videoFile->getName();
    // print_r($videoFilename);
    // die;

    // print_r($uploadDir);
    // die;

    // $file->move(ROOTPATH . 'public\uploads\documents');
    // $videoFile->move($uploadDir, $videoFilename);

    // Call the method to update the student's video information
    $facultyModel->updateStudentVideo($studentId, $registerId, $videoFilename);

    return redirect()->to('FacultyDashboard');
    //  session_destroy();
  }

  public function fetchvideotostudentdashboard()
  {
    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {

        $studentId = session();
        $registerId = $studentId->get('id');
        $facultyModel = new FacultyModel();
        $videos = $facultyModel->getVideosByRegisterId($registerId);
        return view('StudentSideBarVideo', ['videos' => $videos]);
      } else {
        return redirect()->to(base_url());
      }
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

        $result = session();
        $registerId = $result->get('id');
        $db = \Config\Database::connect();
        // $table = $db->table('uplode_study_video_from_student');
        // $query = $table->where('Faculty_id', $registerId)->get();

        $table = $db->table('uplode_study_video_from_student');
        $query = $table->select('uplode_study_video_from_student.*, register.full_name')
          ->join('register', 'register.id = uplode_study_video_from_student.Faculty_id')
          ->where('uplode_study_video_from_student.Faculty_id', $registerId)
          ->get();



        if ($query->getNumRows() > 0) {
          $results = $query->getResult();
          // echo '<pre>';
          // print_r($results);
          // die;
          return view('StudentuplodedVidio', ['results' => $results]);
        } else {
          return redirect()->to(base_url());
        }
      } else {
        return redirect()->to(base_url());
      }
    }
  }
  public function  MonthlyCalendar()
  {

    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {

        $result = session();
        $registerId = $result->get('id');
        return view('FacultysideBar/MonthlyCalendar', ['registerId' => $registerId]);
      } else {
        return redirect()->to(base_url());
      }
    } else {
      return redirect()->to(base_url());
    }
  }

  public function selectfacultySchedule()
  {
    //   print_r($_POST);die;
    if ($this->request->getMethod() === 'post') {
      // Get the data from the form
      $facultyId = $this->request->getPost('faculty_register_id');
      $selectedAppointments = json_decode($this->request->getPost('selected_appointments'), true);
      // print_r($selectedAppointments);die;
      $facultyModel = new FacultyModel();
      // print_r($facultyId);die;
      // Prepare an array of data for batch insertion
      $data = [];
      foreach ($selectedAppointments as $appointment) {
        $data[] = [
          'faculty_register_id' => $facultyId,
          'date' => $appointment['date'],
          'start_time' => $appointment['formTime'],
          'end_time' => $appointment['toTime'],
        ];
      }
      // print_r($data);die;
      // Insert all the data as a batch
      $facultyModel->insertAppointments($data);

      return redirect()->to('SelectSlot');
    } else {
      // Handle non-POST requests (optional).
    }
  }
  public function fetchTofacultyShuduleSidebar()
  {
    if (isset($_SESSION['sessiondata'])) {
      $sessionData = $_SESSION['sessiondata'];

      $email = $sessionData['email'] ?? null;
      $password = $sessionData['password'] ?? null;

      if ($email !== null && $password !== null) {

        $result = session();
        $registerId = $result->get('id');
        $model = new facultymodel();
        $data['FacultysheduleData'] = $model->fetchshedule($registerId);
        // echo "<pre>";print_r($data['FacultysheduleData']);exit();
        return view('FacultysideBar/Monthlyshedule',  $data);
      } else {
        return redirect()->to(base_url());
      }
    } else {
      return redirect()->to(base_url());
    }
  }



  
  public function get_all_notification()
  {
    return view('notification');
  }




}
