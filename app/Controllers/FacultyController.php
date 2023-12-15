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
    $videoFile = $this->request->getFile('videoFile');
    $type = $_FILES['videoFile']['type'];
    $fileName = $_FILES['videoFile']['name'];

     $videoFilename = $videoFile->getName();

    switch ($type) {
      case 'image/gif':
      case 'image/jpg':
      case 'image/png':

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

        // echo "<pre>";print_r($videos);exit();
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
        $table = $db->table('uplode_study_video_from_student');
        $query = $table->where('Faculty_id', $registerId)->get();
        if ($query->getNumRows() > 0) {
          $results = $query->getResult();
          //   print_r($results);die;
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


public function StudentAttendance()
{
  $result = session();
  $registerId = $result->get('id');
  $model = new facultymodel();
  $StudentList['studentList']=$model->getStudentList($registerId);
  // print_r($StudentList['studentList']);die;
  return view('FacultysideBar/Studentattendance',$StudentList);
}


  
  public function get_all_notification()
  {
    return view('notification');
  }

public function submitAttendance()
{
  //  print_r($_POST);die;
  $model = new facultymodel();
  $sessionId = $this->request->getPost('session_id');
  $attendance = $this->request->getPost('attendance');
  $currentConductedSessions = $model->getCurrentConductedSessions($sessionId);
  $model->updateAttendance($sessionId, $attendance,$currentConductedSessions);
  return redirect()->to('FacultyDashboard');
}

}
