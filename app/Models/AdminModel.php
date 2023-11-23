<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table1 = 'register';
    protected $table2 = 'student';
    protected $table3 = 'faculty';
    protected $tableStudents = 'student_slots_tbl';
    protected $tableTeachers = 'schedule';
    protected $table = 'free_demo_table';
    protected $primaryKey = 'D_id';
    protected $allowedFields = ['Date', 'Conducted_Demo', 'name', 'course', 'AssignTecher_id', ''];

   public function AddUserByAdmin($data)
   {
 //   print_r($email);die;
    $this->db->table('register')->insert($data);
   }
   public function AddStudentByAdmin($insertData)
   {

    $this->db->table('register')->insert($insertData);
   }
    public function getTodayRecords()
    {
        // $today = date('Y-m-d');
        // return $this->where('DATE(Date)', $today)->findAll();
        $today = date('Y-m-d');
        return $this->where('DATE(`Book_Date`) =', $today)
            ->findAll();

    }
    public function getGroupSessionStudents() {
        return $this->db->table('register')
        ->where('SessionType', 'GroupSession')
        ->where('groupName IS NULL', null, false)
        ->get()
        ->getResult();
     
    }
    public function getOneToOneSessionStudents() {
        return $this->db->table('register')
        ->where('SessionType', 'OneToOneSession')
        ->get()
        ->getResult();
     
    }
    public function getConductedDemo()
    {

        return $this->db->table('free_demo_table')->where('Conducted_Demo', 'Y')->get()->getResult();
    
    }
    public function getStudents()
    {
        // Assuming "user_type" is a field indicating students
      
        return $this->db->table('register')->where('role', 'Student')->get()->getResult();
    }

    public function getFacultyrole()
    {
       
        return $this->db->table('register')->where('role', 'Faculty')->get()->getResult();
    }
    public function getTeachersByStudent($studentId)
    {
     // print_r($studentId);die;
     $assignTeacherId = $this->db->table('register')
     ->select('Assign_Techer_id')
     ->where('id', $studentId)
     ->get()
     ->getRow()
     ->Assign_Techer_id;
    return $this->db->table('register')
     ->select('id as Assign_Techer_id, full_name')
     ->where('id', $assignTeacherId)
     ->get()
     ->getResult();
}
public function getStudentAndTeacherData($studentId, $teacherId)
{  
   
    $studentData = $this->db->table('student_slots_tbl')->where('register_student_id', $studentId)->get()->getResultArray();
    $teacherData = $this->db->table('schedule')->where('faculty_register_id', $teacherId)->get()->getResultArray();

    $data = [
        'studentData' => $studentData,
        'teacherData' => $teacherData,
    ];

    return $data;
    
   
}

    // public function getPaymentStatusForEmail($email)
    // {
    //     return $this->db->table('register')
    //         ->select('payment_status')
    //         ->where('email', $email)
    //         ->get()
    //         ->getRow('payment_status');
    // }
    public function getStudentDataByEmail($email)
    {
        return $this->db->table('free_demo_table')
            ->where('email', $email)
            ->get()
            ->getRow();
    }

    // public function getPaymentStatusForEmail($email)
    // {
    //     return $this->db->table('register')
    //         ->select('payment_status')
    //         ->where('email', $email)
    //         ->get()
    //         ->getRow('payment_status');
    // }
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
            ->join('faculty', 'faculty.faculty_id = schedule.faculty_register_id') // Join the faculties table
            ->where("MONTH(date) = $currentMonth") // Replace 'date_column' with the actual column name containing the date
            ->get()
            ->getResult();
        // print_r($result);
        // die;

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
    public function edit($data)
    {

        //  echo $data['faculty_name'];die;
        $result = $this->table('free_demo_table')
            ->where(["D_id" => $data['studentid']])
            ->set('AssignTecher_id', $data['faculty_name'])
            ->update();
        if ($result == '1') {
            return true;
        } else {
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

    public function getStudyVideoUplodedByStudent()
    {
        // $VideoDetails = $this->db->table('uplode_study_video_from_student')
        //     ->select('*')
        //     ->get()
        //     ->getResult();

        $VideoDetails = $this->db->table('uplode_study_video_from_student')
            ->select('uplode_study_video_from_student.*, register.full_name as faculty_name')
            ->join('register', 'register.id = uplode_study_video_from_student.Faculty_id')
            ->get()
            ->getResult();

        // echo "<pre>";
        // print_r($VideoDetails);
        // exit();


        // $faculty_ids = array(); // Initialize an empty array to store faculty IDs

        // foreach ($VideoDetails as $video) {
        //     $faculty_ids[] = $video->Faculty_id; // Add each Faculty_id to the array
        // }

        // // Now $faculty_ids will contain an array of Faculty IDs
        // print_r($faculty_ids);
        return  $VideoDetails;
    }

    public function getStudyVideoUplodedByFaculty()
    {
        // return $this->db->table('uplode_video_to_student')
        //     ->select('*')
        //     ->get()
        //     ->getResult();

        $VideoDetails = $this->db->table('uplode_video_to_student')
            ->select('uplode_video_to_student.*, student.student_name as student_name, register.full_name as faculty_name')
            ->join('student', 'student.student_id = uplode_video_to_student.student_id')
            ->join('register', 'register.id = uplode_video_to_student.register_faculty_id')
            ->get()
            ->getResult();
        return  $VideoDetails;
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
    public function updateGroupName($rowIdsArray, $groupName)
    {
        return $this->db->table('register')
        ->whereIn('id', $rowIdsArray)
        ->set(['groupName' => $groupName])
        ->update();
    }

    public function updateCarrierData($D_id, $action)
    {
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

    public function updatePassword($id, $password)
    {
        return $this->db->table('register')
            ->where('id', $id)
            ->update(['password' => $password]);
    }
    public function BackToprndinglistofdemo($D_id, $result, $date, $time)
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
    public function getAllGroupNames()
    {
       
        return $this->db->table('register')->distinct()
            ->select('groupName')
            ->where('groupName IS NOT NULL', null, false) // Adding the condition for 'groupName' is not null
            ->get()
            ->getResultArray();
    }
    public function getRecordsByGroupName($groupName)
    {
        return $this->db->table('register')
              ->where('groupName', $groupName)
                    ->where('SessionType', 'GroupSession')
                    ->get()
                    ->getResult();
    }

    public function updateFacultyForGroup($groupName, $facultyId)
    {
        return $this->db->table('register')
        ->where('groupName', $groupName)
         ->set(['Assign_Techer_id' => $facultyId])
        ->update();
    }

   
}