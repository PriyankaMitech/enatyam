<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DemoModel;
use App\Models\AdminModel;

class DemoController extends BaseController
{
    public function bookDemo()
    {
        // print_r($_POST);die;

        $demoModel = new DemoModel();
       
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'Phone_countryCode' => $this->request->getPost('telephone_country_code'),
            'phone' => $this->request->getPost('mobile_number'),
            'course' => $this->request->getPost('courses_id_d'),
            'sub_course' => $this->request->getPost('sub_courses_id_d'),
            'Age' => $this->request->getPost('Age1'),
            'exprience' => $this->request->getPost('exprience'),
            'Country' => $this->request->getPost('Country'),
            'city' => $this->request->getPost('city'),
            'mobileWithCode'=>$this->request->getPost('telephone_country_code').$this->request->getPost('mobile_number'),

            // 'State' => $this->request->getPost('State'),
            // 'District' => $this->request->getPost('District'),
            // 'Book_Date_Time' => $this->request->getPost('Book_Date_Time')
            'Book_Date' => $this->request->getPost('Book_Date'),
            // 'Start_Time' => $this->request->getPost('Start_Time'),
            // 'End_Time' => $this->request->getPost('End_Time'),

        ];
        $phone = $data['mobileWithCode'];
        // echo "<pre>";
        // print_r($phone);
        // exit();
        $demoModel->save($data);
        $session = session();
        $phoneNumber = $phone;
        $templates = "1247772206608012";
        demoBook($phoneNumber,$templates);
       // $phoneNumber = "917588525387";
        $templates = "930840461869403";
         $msg = "New Demo Booked Sucessfully";
         whatsappadmin($templates,$msg,);
         $session->setFlashdata('success', 'Demo booked successfully!');
        return redirect()->to('Home');
    }


    public function todayDemo()
    {
        if (isset($_SESSION['sessiondata'])) {
            $sessionData = $_SESSION['sessiondata'];

            $email = $sessionData['email'] ?? null;
            $password = $sessionData['password'] ?? null;

            if ($email !== null && $password !== null) {

                $result = session();
                $registerId = $result->get('id');
                $demoModel = new DemoModel();
                $currentDate = date('Y-m-d');
                $data['data'] = $demoModel->getTodayDemo($currentDate, $registerId);
                $data['allData'] = $demoModel->getAssignTecherData($registerId);
                return view('FacultySchedule', $data);
            } else {
                return redirect()->to(base_url());
            }
        } else {
            return redirect()->to(base_url());
        }
    }

    public function allDemoList()
    {
        $result = session();
        $registerId = $result->get('id');

        $demoModel = new DemoModel();

        // Fetch all data where AssignTecher_id is equal to $registerId
        $data['allData'] = $demoModel->table($demoModel->table)
            ->where('AssignTecher_id', $registerId)
            ->findAll();
        //     print_r($data);die;
        return view('FacultySchedule', $data);
    }

    public function resheduleDemo()
    {
        // print_r($_POST);die;
        $action = $this->request->getPost('action');
        $id = $this->request->getPost('D_id');
        $demoModel = new DemoModel();
        $result =  $demoModel->demoreshedule($id, $action);
        return redirect()->to('getDemoDetails');
    }
    public function demostatus()
    {
        //print_r($_POST);die;
        $session = session();
        $student_id = $_POST['student_id'];
        $attendance = $_POST['attendance'];
        $demoModel = new DemoModel();
       $updatestaus =$demoModel->updatedata($student_id,$attendance);
       $session->setFlashdata('success', 'Demo status updeted!');
       return redirect()->to('FacultySchedule');
    }

    
    // public function senddemoremainder()
    // {
      
    //     date_default_timezone_set('Asia/Kolkata');
    
    //     $demoModel = new DemoModel();
    //     $model = new AdminModel();
    //     $recordsForToday = $demoModel->getRecordsForToday();
    //     $currentTime = date('H:i:s'); // Current time in HH:MM:SS format
    //    //  echo '<pre>';   print_r($recordsForToday);die;
    //     foreach ($recordsForToday as $record) {
    //         if (is_array($record)) {
    //             $bookDate = $record['Book_Date'];
    //             $bookDateTime = $record['Book_Date_Time'];
    //             $assignTeacherId = $record['AssignTecher_id']; 
    //             $phoneNumber = $record['mobileWithCode'];
    //             $studentname = $record['name'];
    //             $buffertime = date('H:i:s', strtotime($record['buffertime'])); // Extract time from buffertime
                
    //             // Print out the buffertime for checking
    //             echo "cu: $currentTime <br>";
    //            echo "Buffertime: $buffertime <br>";
    
    //             // Check if the current time matches the buffertime
    //             if ($currentTime == $buffertime) {
    //                 echo "hi";
    //                 $phoneNumber = $record['mobileWithCode'];
    //                 $templates = "930840461869403";
    //                 $msg = "Hello $studentname, Demo Alert! Your demo session is approaching. It will start in the next 15 minutes. Date: $bookDate, Time: $bookDateTime. Feel free to invite your friends and family to attend the demo with you.";
    //                 whatsapp($phoneNumber, $templates, $msg);
    //                 $wherecond1 = [
    //                     'id' => $assignTeacherId,
    //                 ];
    //                 $teacher_data = $model->getsinglerow('register', $wherecond1);
    //                 $teacherName = $teacher_data->full_name;
    //                 $teacherMobile = $teacher_data->mobileWithCode;
    //                 $phoneNumber = $teacherMobile;
    //                 $msg = "Hello $teacherName, Demo Alert! Your demo session is approaching. It will start in the next 15 minutes. Date: $bookDate, Time: $bookDateTime. Feel free to invite your friends and family to attend the demo with you.";
    //                 whatsapp($phoneNumber, $templates, $msg);
    
    //                 echo "success";
    //             }
    //         } else {
    //             echo "by";
    //         }
    //     }
    // }
    public function senddemoremainder()
    {
        date_default_timezone_set('Asia/Kolkata');
    
        $demoModel = new DemoModel();
        $model = new AdminModel();
        $recordsForToday = $demoModel->getRecordsForToday();
        $currentTime = date('H:i:s'); // Current time in HH:MM:SS format
    
        // Adjust this range as per your requirement
        $timeRange = 30; // 60 seconds, or 1 minute
    
        foreach ($recordsForToday as $record) {
            if (is_array($record)) {
                $bookDate = $record['Book_Date'];
                $bookDateTime = $record['Book_Date_Time'];
                $assignTeacherId = $record['AssignTecher_id']; 
                $phoneNumber = $record['mobileWithCode'];
                $studentname = $record['name'];
                $buffertime = date('H:i:s', strtotime($record['buffertime'])); // Extract time from buffertime
                
                echo "cu: $currentTime <br>";
                echo "Buffertime: $buffertime <br>";
    
                // Convert current time and buffer time to timestamps
                $currentTimestamp = strtotime($currentTime);
                $bufferTimestamp = strtotime($buffertime);
    
                // Check if the current time falls within the time range around the buffer time
                if ($currentTimestamp >= ($bufferTimestamp - $timeRange) && $currentTimestamp <= ($bufferTimestamp + $timeRange)) {
                    echo "hi";
                    $templates = "930840461869403";
                    $msg = "Hello $studentname, Demo Alert! Your demo session is approaching. It will start in the next 15 minutes. Date: $bookDate, Time: $bookDateTime. Feel free to invite your friends and family to attend the demo with you.";
                    whatsapp($phoneNumber, $templates, $msg);
    
                    $wherecond1 = [
                        'id' => $assignTeacherId,
                    ];
                    $teacher_data = $model->getsinglerow('register', $wherecond1);
                    $teacherName = $teacher_data->full_name;
                    $teacherMobile = $teacher_data->mobileWithCode;
                    $phoneNumber = $teacherMobile;
                    $msg = "Hello $teacherName, Demo Alert! Your demo session is approaching. It will start in the next 15 minutes. Date: $bookDate, Time: $bookDateTime. Feel free to invite your friends and family to attend the demo with you.";
                    whatsapp($phoneNumber, $templates, $msg);
    
                    echo "success";
                }
            } else {
                echo "by";
            }
        }
    }
}
