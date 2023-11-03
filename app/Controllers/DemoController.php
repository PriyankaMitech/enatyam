<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DemoModel;

class DemoController extends BaseController
{
    public function bookDemo()
    {
      
        $demoModel = new DemoModel();

        //if ($this->request->getMethod() === 'post') {
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
                'Book_Date_Time' => $this->request->getPost('Book_Date_Time')
            ];
      //     print_r($data);die;
            $demoModel->save($data);
            return redirect()->to('home');
        }

        public function todayDemo()
        {
             $result = session();
             $registerId = $result->get('id');
        //    print_r($registerId);die;
             $demoModel = new DemoModel();
             $currentDate = date('Y-m-d');

             $data['data'] = $demoModel->getTodayDemo($currentDate, $registerId);
      //   echo "<pre>"; print_r($data['data']);echo "</pre>"; die();
             $data['allData'] = $demoModel->getAssignTecherData($registerId);
        //  echo "<pre>"; print_r($data['allData']);echo "</pre>"; die();
        
     
         return view('FacultySchedule', $data);
     
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