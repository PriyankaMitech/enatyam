<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DemoModel;

class DemoController extends BaseController
{
    public function bookDemo()
    {
      
               $demoModel = new DemoModel();
                $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'course' => $this->request->getPost('course'),
                'sub_course' => $this->request->getPost('sub_course'),
                'Age' => $this->request->getPost('Age'),
                'exprience' => $this->request->getPost('exprience'),
                'Country' => $this->request->getPost('Country'),
                'State' => $this->request->getPost('State'),
                'District' => $this->request->getPost('District'),
               // 'Book_Date_Time' => $this->request->getPost('Book_Date_Time')
               'Book_Date' => $this->request->getPost('Book_Date'),
               'Start_Time' => $this->request->getPost('Start_Time'),
                 'End_Time' => $this->request->getPost('End_Time'),
                
            ];
            $demoModel->save($data);
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

        public function resheduleDemo() {
       // print_r($_POST);die;
         $action = $this->request->getPost('action');
         $id = $this->request->getPost('D_id');  
         $demoModel = new DemoModel();
         $result =  $demoModel->demoreshedule( $id, $action);
         return redirect()->to('getDemoDetails');

        }
    }