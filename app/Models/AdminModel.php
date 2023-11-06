<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table1 = 'register';
    protected $table2 = 'student';
    protected $table3 = 'faculty';

    protected $table = 'free_demo_table';
    protected $primaryKey = 'D_id';
    protected $allowedFields = ['Date','Conducted_Demo','name','course','AssignTecher_id',''];


    public function getTodayRecords()
    {
        // $today = date('Y-m-d');
        // return $this->where('DATE(Date)', $today)->findAll();
        $today = date('Y-m-d');
        return $this->where('DATE(`Book_Date`) =', $today)
                    ->findAll();
       
       
    }
    public function getConductedDemo()
    {
        
        return $this->db->table('free_demo_table')->where('Conducted_Demo', 'Y')->get()->getResult();
       
    }
    public function getPendingDemo()
    {
        return $this->db->table('free_demo_table')->where('Conducted_Demo', 'N')->get()->getResult();
    }
    public function getPendingDemoList()
    {
        return $this->db->table('free_demo_table')
        ->where('Conducted_Demo', 'N')
        ->where('Reshedule_date', null)
        ->get()
        ->getResult();
    }
    public function getFacultyShedule()
    {
        $currentMonth = date('m'); // Get the current month in the format 'mm'
        
        $result = $this->db->table('schedule')
            ->select('schedule.*, faculty.faculty_name') // Select the required columns, including faculty_name
            ->join('faculty', 'faculty.faculty_id = schedule.faculty_id') // Join the faculties table
            ->where("MONTH(date) = $currentMonth") // Replace 'date_column' with the actual column name containing the date
            ->get()
            ->getResult();
    
        return $result;
    }
   
    public function getRowCount()
    {
      
       return $this->countAllResults();
         
    }
    public function getEmployees()
    {
        return $this->findAll();
    }
    public function getAdmins()
    {
        return $this->db->table('register')->where('role', 'Student')->get()->getResult();
    }
    public function getFaculty()
    {
        return $this->db->table('register')->where('role', 'Faculty')->get()->getResult();
        
    }
    public function getAllSessionData()
    {
        return $this->findAll();
    }
    public function edit($data) {

      //  echo $data['faculty_name'];die;
		$result = $this->table('free_demo_table')
                        ->where(["D_id" => $data['studentid']])
                        ->set('AssignTecher_id',$data['faculty_name'])
                        ->update();
        if ($result == '1') {
            return true;
        }else {
            return false;
        }
                       
	}


    public function add($data)
    {
      
      //  print_r($data['studentid']);die;
        $builder = $this->db->table($this->table2);

        $builder->set('Assign_Techer_id', $data['faculty_name']);
        $builder->where('register_id', $data['studentid']);

        $result = $builder->update();

        $builder = $this->db->table($this->table1);

        $builder->set('Assign_Techer_id', $data['faculty_name']);
        $builder->where('id', $data['studentid']);

        $result = $builder->update();


        if ($result) {
            return true;
        } else {
            return false;
        }
    }
        
  
    
    public function getConductedDemoStatus()
    {
        return $this->db->table('free_demo_table')->where('AssignTecher_id >', 0)->get()->getResult();
    }


    public function Paymentstatus()
    {
        return $this->db->table('register')->where('Payment_status', 'Y')->get()->getResult();
      
    }

    public function getAllDemoData()
    {
        return $this->db->table('free_demo_table')
        ->select('*')
        ->get()
        ->getResult();
    }

    public function getFacultyData()
    {
        return $this->db->table('faculty')
        ->select('*')
        ->get()
        ->getResult();
    }

    public function getStudentData()
    {
        return $this->db->table('student')
        ->select('*')
        ->get()
        ->getResult();
    }

    public function getStudeyVideoUplodeByStudent()
    {
        return $this->db->table('uplode_study_video_from_student')
        ->select('*')
        ->get()
        ->getResult();
    }

    public function getStudeyVideoUplodeByFaculty()
    {
        return $this->db->table('uplode_video_to_student')
        ->select('*')
        ->get()
        ->getResult();
    }

    public function getcarreerBookByfaculty()
    {
        return $this->db->table('carrier')
        ->select('*')
        ->where('Result_of_application', 'Pending')
        ->get()
        ->getResult();
    }

    public function getrejectedList()
    {
        return $this->db->table('carrier')
        ->select('*')
        ->where('Stetus', 'N')
        ->Where('Result_of_application', 'decline')
        ->get()
        ->getResult();
    }


    public function updateCarrierData($D_id, $action) {
        return $this->db->table('carrier')
            ->where('D_id', $D_id)
            ->update(['Result_of_application' => $action]);
    }
 
    public function getNullPasswordRecords()
    {
        return $this->db->table('register')
        ->where('password', '')
        ->get()
        ->getResult();
    }

    public function updatePassword($id, $password) {
        return $this->db->table('register')
            ->where('id', $id)
            ->update(['password' => $password]);
            
    }
    public function BackToprndinglistofdemo($D_id,$result,$date,$time)
    {
        return $this->db->table('free_demo_table')
            ->where('D_id', $D_id)
            ->update([
                'Conducted_Demo' => $result,
                'Reshedule_date' => $date,
                'Reshedule_Time' => $time
            ]);
    }
    public function getresheduleDemo()
    {
        
        return $this->db->table('free_demo_table')->where('Conducted_Demo', 'Reschedule')->get()->getResult();
       
    }
    public function getdate($date)
    {
       
        // return $this->db->table('schedule')
        // ->select('*')
        // ->get()
        // ->getResult();
 

        $result = $this->db->table('schedule')
        ->where('date', $date)
        ->get()
        ->getResult();
        // echo "<pre>";print_r($result);exit();

return $result;
    }
    public function getmonthdata()
    {
        $currentMonth = date('Y-m');
        
        $result = $this->db->table('schedule')
            ->select('*')
            ->where('date >=', $currentMonth . '-01')
            ->where('date <=', $currentMonth . '-31')
            ->get()
            ->getResult();
    
        return $result;
    }
}
