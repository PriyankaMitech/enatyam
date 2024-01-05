<?php

namespace App\Controllers;

use App\Models\facultymodel;
use App\Models\AdminModel;
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
            $data = $facultymodel->where('Assign_Techer_id', $teacherId)->findAll();
            $wherecond1 = array('id' => $teacherId);



            $loginsingel_data = $model->getsinglerow('register',$wherecond1);
            

            $wherecond = '';
            if(!empty($loginsingel_data)){
            $wherecond = ['faculty_id_g' => $loginsingel_data->carrier_id];
            }


            $select = 'tbl_group.*, tbl_courses.courses_name, tbl_sub_courses.sub_courses_name, carrier.name';
            $joinCond = 'tbl_group.courses_id_g = tbl_courses.id';
            $joinCond1 = 'tbl_group.sub_courses_id_g = tbl_sub_courses.id';
            $joinCond3 = 'tbl_group.faculty_id_g = carrier.D_id';




            
// Assuming joinfivetables method exists in AdminModel
$group_data = $model->joinfourtables($select, 'tbl_group', 'tbl_courses', 'tbl_sub_courses', 'carrier',  $joinCond, $joinCond1, $joinCond3, $wherecond, 'DESC');

// Debugging
// echo "<pre>";
// print_r($data['group_data']);
// exit();


            // $group_data = $model->joinfivetables('tbl_group',$wherecond);


            $todayDate = date('Y-m-d H:i:s');
            $displayedNotificationCount = 0;

            return view('faculty', [
                'data' => $data,
                'todaysession' => $todaysession,
                'group_data' => $group_data,
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
        $studentId = session();
        $registerId = $studentId->get('id');
        $facultyModel = new FacultyModel();
        $videos = $facultyModel->getVideosByRegisterId($registerId);

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
        $wherecond = array('USER_ID'=> $_SESSION['sessiondata']['id']);
        $result['registerId'] = $session->get('id');
        $result['faculty_slots'] =$facultyModel->getFacultySlots($registerId);
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

    public function save_schedule_data() {
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

      $data['schedule_data'] = $model->getalldata('schedule_list',$wherecond);
      echo view('schedule/index', $data);
    }

    public function save_schedule()
{
 // print_r($_POST);die;
    $model = new facultymodel();

    if ($this->request->getMethod() !== 'post') {
        return redirect()->to(base_url())->with('error', 'Error: No data to save.');
    }

    $data = $this->request->getPost();

    // Add the selected days to the data array
    $data['days'] = isset($data['days']) ? $data['days'] : [];

    if ($model->saveSchedule($data)) {
        return redirect()->to('giveschedule')->with('success', 'Schedule Successfully Saved.');
    } else {
        return view('error_view', [
            'error' => [
                'message' => 'An Error occurred.',
                'error' => $model->errors(),
            ],
        ]);
    }
}


}
