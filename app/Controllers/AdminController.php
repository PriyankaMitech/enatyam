<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CarrierModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class AdminController extends BaseController
{
    public function givestudent()
    {
        return view('givestudent');
    }
    
    public function today()
    {
  
    if (isset($_SESSION['sessiondata'])) {
        $sessionData = $_SESSION['sessiondata'];
    
        $email = $sessionData['email'] ?? null;
        $password = $sessionData['password'] ?? null;

        if ($email !== null && $password !== null) {
            $model = new AdminModel();
            $data['records'] = $model->getTodayRecords();
            $data['SessionData'] = $model->findAll();
            $data['count'] = $model->getRowCount();
          
            $data['admins'] = $model->getAdmins();
            $data['Faculty'] = $model->getFaculty();
            $data['ConductedDemo'] = $model->getConductedDemo();
            $data['PendingDemo'] = $model->getPendingDemo();
            $data['ConductedDemoStatus'] = $model->getConductedDemoStatus();
            $data['getPaymentstatus'] = $model->Paymentstatus();
            $data['getAllDemoList'] = $model->getAllDemoData();

            return view('AdminDashboard', $data);  
        } else { 
            return redirect()->to(base_url());
        }
    } else {
        return redirect()->to(base_url());
    }
}
  //   print_r($_POST);die;
  public function AssignTecherForDemo()
  {  
    // print_r($_POST);die;
        $model = new AdminModel();
   
         
     
          $postData = $this->request->getPost();
  
          $model->edit($postData); 
          return redirect()->to('today');
         
   
    }


public function AssignTecherToStudent()
{
    $model = new AdminModel();

    if ($this->request->getMethod() === 'post') {
        $postData = $this->request->getPost();
        
       
        $result = $model->add($postData);

        if ($result) {
          
            return redirect()->to('today'); // Change 'success' to your desired URL
        } else {
          
            return redirect()->to('error'); // Change 'error' to your error handling URL
        }
    }

  
}

public function Getcalender()
{
    return view('AdminCalender');
}


public function getAdminSideBarAll()
    {
        $model = new AdminModel();
        $data['facultyData'] = $model->getFacultyData();
      
    //   print_r($data);die;
  //   echo "<pre>"; print_r($data);echo "</pre>"; die();
        return view('AdminSideBar/FacultyProfile', $data);
        // return view('AdminSideBar/FacultyProfile');
    }
    public function StudentDate()
    {
        $model = new AdminModel();
        $data['facultyData'] = $model->getStudentData();
      return view('AdminSideBar/StudentProfile', $data);
    }

    public function UplodedvideoByStudent() {

        $model = new AdminModel();
        $data['studentVideoData'] = $model->getStudeyVideoUplodeByStudent();
        $data['FacultyVideoData'] = $model->getStudeyVideoUplodeByFaculty();
        // echo "<pre>"; print_r($data['FacultyVideoData']);echo "</pre>"; die();
        return view('AdminSideBar/StudentVideo', $data);      
    }

    public function getDemoDetails()
    {
        $model = new AdminModel();
    //     $ConductedDemo = session()->get('ConductedDemo');
    //     print_r($ConductedDemo);die;
    //  return view('AdminSideBar/Demo', ['ConductedDemo' => $ConductedDemo]);
    $data['ConductedDemo'] = $model->getConductedDemo();
    $data['PendingDemo'] = $model->getPendingDemoList();
     $data['resheduleDemo'] = $model->getresheduleDemo();
     $data['Faculty'] = $model->getFaculty();
   // echo "<pre>"; print_r($data['resheduleDemo']);echo "</pre>"; die();
    return view('AdminSideBar/Demo', $data);
    }

    public function GetClasses() {
        return view('AdminSideBar/DailyClass');
    }
    

    public function NewFacultyApplication()
    {
        $model = new AdminModel();
    $allCareerData = $model->getcarreerBookByfaculty();
    $filteredCareerData = array_filter($allCareerData, function ($careerRecord) {
        return $careerRecord->Result_of_application === 'Pending';
    });
    $data['carrer'] = $filteredCareerData;
    $data['cansalList'] = $model->getrejectedList();
   $data['createPassword'] = $model->getNullPasswordRecords(); 
//    echo "<pre>"; print_r($data['createPassword']);echo "</pre>"; die(); 
    return view('AdminSideBar/NewFacultyApplication', $data);
    }

    public function Steusupdate(){
    
     //   print_r($_POST);die;
        $action = $this->request->getPost('action');
        $D_id = $this->request->getPost('D_id');  
        if ($D_id && ($action === 'approve' || $action === 'decline')) {
            $model = new CarrierModel();      
          $careerRecord = $model->getcarreerByfaculty($D_id);
   //       echo "<pre>"; print_r($careerRecord);echo "</pre>"; die();  
         
            if ($careerRecord) {
        
                $data = [
                    'Result_of_application' => $action,
                    'Stetus' => 'N',
                ];
            //  print_r($data);die;
                $model->update($D_id, $data);

                
                if ($action === 'approve') {
                    $model2 = new LoginModel();     
                    $model = new CarrierModel();
                    $lastUpdatedCareerData = $model->getresultofResultofapplication($D_id);
             
                    if ($lastUpdatedCareerData) {
                     
                        $registerData = [
                            'full_name' => $lastUpdatedCareerData['name'],
                            'email' => $lastUpdatedCareerData['email'],
                            'is_register_done' => 'Y',
                            'role' => 'Faculty',
                        ];
                  
                    // $model2->insertTable1Data($registerData);

                    $lastInsertedData = $model2->insertTable1Data($registerData);            
                 $lastInsertedData = [
                            
                            'faculty_name' =>$lastUpdatedCareerData['name'], 
                            'email' =>$lastUpdatedCareerData['email'], 
                            'register_id'=>$lastInsertedData['id'],
                        ];

                    //  print_r($lastInsertedData);die; 
                      
                        $model->insertTable2Data($lastInsertedData);
                    }
                }
    
                return redirect()->to('NewFacultyApplication');
            }
   
}  
}

     public function backtoApplication()  {
 // print_r($_POST);die;
 
     $action = $this->request->getPost('action');
    $D_id = $this->request->getPost('D_id');  
 
     $model = new AdminModel();      
 
    $result = $model->updateCarrierData($D_id, $action);
    return redirect()->to('NewFacultyApplication');
}
  public function createpassword()
  {
  //  print_r($_POST);die;

    $password = $this->request->getPost('password');
    $id = $this->request->getPost('id');  
    $model = new AdminModel();
    $result = $model->updatePassword( $id, $password);
  
    return redirect()->to('NewFacultyApplication');

  }
  public function ResheduleByadmin()
  {
    //   print_r($_POST);die;
    $date = $this->request->getPost('Reshedule_date');
    $time = $this->request->getPost('Reshedule_Time');
    $result = $this->request->getPost('action');
    $D_id = $this->request->getPost('D_id');  
    $model = new AdminModel();
    $result = $model->BackToprndinglistofdemo($D_id,$result, $date,$time);

    return redirect()->to('getDemoDetails');
  }

  public function FacultysidebarShedule()
    {
        $model = new AdminModel();
        //  print_r($_POST);die;
      
      
         $data['FacultysheduleData'] = $model->getFacultyShedule();
      //    echo "<pre>"; print_r($data);echo "</pre>"; die();  
       
      
          return view('AdminSideBar/FacultysidebarShedule', $data);


}
public function getdate()
{
    $model = new AdminModel();
    $date = $this->request->getPost('date');
    $tableHtml = ''; // Initialize an empty string to store the HTML table

    if ($date) {
        $dateData = $model->getdate($date);
        
        if (!empty($dateData)) {
            $tableHtml = '<div class="table-container"><table class="custom-table"><thead><tr><th>Sr.no</th><th>Date</th><th>Time</th></tr></thead><tbody>';

            foreach ($dateData as $data) {
                $tableHtml .= '<tr><td>' . $data->faculty_id . '</td><td>' . $data->date . '</td><td>' . $data->time . '</td></tr>';
            }

            $tableHtml .= '</tbody></table></div>';
        }
    } else {
        $tableHtml = json_encode([]); // Return an empty JSON if there's no data
    }

    return $tableHtml;
}

public function AdduserByadmin()
{
     //  print_r($_POST);die;
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $mo_number = $this->request->getPost('password');
    //  print_r($email);die;
   $model = new AdminModel();
   $data = [
    'full_name' => $this->request->getVar('full_name'),
    'email' => $email,
    'mobile_no' =>$mo_number ,
    'role' => 'Admin',
    'password' => $password,
    'confirm_pass' =>$password,
    'is_register_done' => 'Y',
];
//print_r($data);die;
    $model->AddUserByAdmin($data);
    return redirect()->to('Getcalender');

}
    }

    
    
