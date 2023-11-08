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
      
        $studentData = $facultymodel ->getStudentData($studentId);

        // Pass the student data to the view
     //   print_r($studentData);die;
        return view('facultyinfo', ['studentData' => $studentData]);
       
       // return view('facultyinfo');
    }


    public function fetchDataByAssignTeacherId()
    {
 //   print_r($this->session->get('id'));die;

      $teacherId = $this->session->get('id');
    
 
    $facultymodel = new facultymodel();

   
   
    $data = $facultymodel->where('Assign_Techer_id', $teacherId)->findAll();
 
 //print_r($data);die;

 //session()->set('data', $data);
 
   return view('faculty', ['data' => $data]);

 //  return redirect()->route('fetchstudyVideouplodeFromstudent', ['data' => $data]);
 
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
    $videoFile = $this->request->getFile('videoFile');
    
    // Get the client's original video file name
    $videoFilename = $videoFile->getName();

    // Move the video file to the 'public/videos/' directory
    $uploadDir = WRITEPATH . 'uploads/';
    $videoFile->move($uploadDir, $videoFilename);

    // Call the method to update the student's video information
    $facultyModel->updateStudentVideo($studentId, $registerId, $videoFilename);

    return redirect()->to('FacultyDashboard');
  //  session_destroy();
}

    public function fetchvideotostudentdashboard()
    {
        $studentId = session();
        $registerId = $studentId->get('id');
        $facultyModel = new FacultyModel();
        $videos = $facultyModel->getVideosByRegisterId($registerId);
     //    print_r ($videos);die;
        return view('StudentSideBarVideo', ['videos' => $videos]);
     
    }

  public function StudentuplodedVidio()
  {
     
    $result = session();
    $registerId = $result->get('id');
   // print_r($registerId);die;
    $db = \Config\Database::connect(); // Get a database connection
    
   
    $table = $db->table('uplode_study_video_from_student');
    $query = $table->where('Faculty_id', $registerId)->get();
    if ($query->getNumRows() > 0) {
       
        $results = $query->getResult();

      //  echo "<pre>"; print_r($results);echo "</pre>"; die(); 
     //   print_r($results);die;
        return view('StudentuplodedVidio', ['results' => $results]);
     
    }
   
  }
  public function  MonthlyCalendar() {

    $result = session();
    $registerId = $result->get('id');
 // print_r($registerId);die;
    return view('FacultysideBar\MonthlyCalendar',['registerId' => $registerId]);
    
  }
  
  public function selectfacultySchedule() {
   // print_r($_POST);die;
    if ($this->request->getMethod() === 'post') {
        // Get the data from the form
        $facultyId = $this->request->getPost('faculty_id');
        $selectedAppointments = json_decode($this->request->getPost('selected_appointments'), true);
// print_r($selectedAppointments);die;
        $facultyModel = new FacultyModel();

        // Prepare an array of data for batch insertion
        $data = [];
        foreach ($selectedAppointments as $appointment) {
            $data[] = [
              'faculty_id' => $facultyId,
                'date' => $appointment['date'],
                'start_time' => $appointment['formTime'],
                'end_time' => $appointment['toTime'],
            ];
        }
  //print_r($data);die;
        // Insert all the data as a batch
        $facultyModel->insertAppointments($data);

       return redirect()->to('MonthlyCalendar'); 
    } else {
        // Handle non-POST requests (optional).
    }
}
public function fetchTofacultyShuduleSidebar()
{
  $result = session();
  $registerId = $result->get('id');

  $model = new facultymodel();
  $data['FacultysheduleData'] = $model->fetchshedule($registerId);
  // $slots = $model->fetchshedule($registerId);
  // $slots['slots'] = $model->fetchshedule();
  //  echo "<pre>"; print_r( $data);echo "</pre>"; die();  
 

    return view('FacultySchedule', $data); 
    return view('FacultysideBar/Monthlyshedule',  $data);
}
}