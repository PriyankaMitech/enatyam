<?php

namespace App\Models;

use CodeIgniter\Model;

class facultymodel extends Model
{
    //  protected $table4='free_demo_table';
    protected $table3 = 'uplode_study_video_from_student';
    protected $table2 = 'uplode_video_to_student';
    protected $table = 'student'; // Set the table name
    protected $primaryKey = 'student_id';
    protected $allowedFields = ['student_id', 'id', 'Date', 'Conducted_Demo', 'name', 'course', 'Assign_Teacher_id', 'video_name', 'Student_name',];

    public function getStudentData($studentId)
    {

        return $this->db->table('student')->where('student_id', $studentId)->get()->getRowArray();
    }



    public function updateStudentVideo($studentId, $registerId, $videoFilename)
    {
        $data = [
            'student_id' => $studentId,
            'register_faculty_id' => $registerId, // Include register_id in the data array
            'video_name' => $videoFilename,
        ];
        // print_r($data);
        // die;
        // Insert the video information into the 'uploaded_videos' table
        $res = $this->db->table($this->table2)->insert($data);
        // if ($res) {
        //     echo "true!!!!";
        // }

        // Update the 'video_name' column in the 'students' table
        $res1 = $this->db->table($this->table)
            ->where('student_id', $studentId)
            ->update(['video_name' => $videoFilename]);
        // if ($res1) {
        //     echo "again true!!!!!1";
        //     die;
        // }
    }


    public function getVideosByRegisterId($registerId)
    {
        $videos = $this->db->table('student s')
            ->join('uplode_video_to_student sv', 'sv.student_id = s.student_id')
            ->select('s.student_id, sv.video_name ,sv.DateTime')
            ->where('register_id', $registerId)
            ->get()
            ->getResult();
        return $videos;
        //   print_r($videos);die;
        //  echo '<pre>';print_r($this->getLastQuery());die;
    }

    public function insertAppointments($data)
    {
        //print_r($data);die;
        if (!empty($data) && is_array($data)) {
            $this->db->table('schedule')->insertBatch($data);
            return true; // Success
        } else {
            return false; // Failed to insert data
        }
    }
    public function checkDataExists($facultyId, $formDay, $formTime, $toTime)
    {
        $result = $this->db->table('schedule')
        ->where('faculty_register_id', $facultyId)
        ->where('Day', $formDay)
        ->groupStart()
        ->where('start_time <=', $toTime)
        ->where('end_time >=', $formTime)
        ->groupEnd()
        ->countAllResults();

    return $result > 0;
    }
    public function getFacultySlots($facultyRegisterId)
    {
        $query = $this->db->table('schedule') 
            ->select('day, start_time, end_time') 
            ->where('faculty_register_id', $facultyRegisterId);
        $result = $query->get()->getResultArray(); 
    
        return $result;
    }
    public function fetchshedule($registerId)
    {
    $currentMonth = date('m'); // Get the current month in the format 'mm'

    $result = $this->db->table('schedule')
        ->select('schedule.*, register.full_name as faculty_name, student.full_name as student_name')
        ->join('register', 'register.id = schedule.faculty_register_id')
        ->join('register as student', 'student.id = schedule.student_register_id', 'left')
        ->where('schedule.faculty_register_id', $registerId)
        ->where('schedule.student_register_id IS NOT NULL')
        ->where("MONTH(schedule.date) = $currentMonth")
        ->get()
        ->getResult();
    // echo $this->db->getLastQuery();die;
    
    return $result;

    }
    public function gettodayssessiontofaculty($teacherId)
    {
    $todayDate = date('Y-m-d');
    $builder = $this->db->table('schedule');
    $builder->select('schedule.*, register.full_name as student_name'); // Select the fields you need
    $builder->join('register', 'register.id = schedule.student_register_id', 'left'); // Adjust the join condition based on your actual database structure
    $builder->where('schedule.faculty_register_id', $teacherId);
    // $builder->where('schedule.zz', $todayDate);
    $builder->where('schedule.student_register_id IS NOT NULL');
    $query = $builder->get();
    $result = $query->getResult();
    return $result;
    }
    public function getStudentList($registerId){
        $result= $this->db->table('register')
        ->where('role', 'Student')
        ->where('Assign_Techer_id', $registerId)
        ->get()
        ->getResult();
        // echo $this->db->getLastQuery();die;
        return $result;
    }
    public function updateAttendance($sessionId, $attendance, $currentConductedSessions)
    {
        // If attendance is "present," increment the count and append it to the array
        $conductedSessions = explode(',', $currentConductedSessions);
        
        // Extract the numeric part from the last session entry and increment by 1
        $lastSession = end($conductedSessions);
        $lastCount = (int) $lastSession; // Extract the numeric part
        $newCount = is_numeric($lastCount) ? $lastCount + 1 : 1;
    
        // Handle the leading comma conditionally
        $leadingComma = empty($currentConductedSessions) ? '' : ',';
    
        if ($attendance === 'present') {
            $this->db->table('student')
                ->where('register_id', $sessionId)
                ->update(['ConductedSessionsCount' => $currentConductedSessions . $leadingComma . $newCount . '-P']);
            
            return $newCount;
        } else {
            $this->db->table('student')
                ->where('register_id', $sessionId)
                ->update(['ConductedSessionsCount' => $currentConductedSessions . $leadingComma . $newCount . '-A']);
            
            return $newCount;
        }
    }
    public function getCurrentConductedSessions($sessionId)
    {
        return $this->db->table('student')
            ->select('ConductedSessionsCount')
            ->where('register_id', $sessionId)
            ->get()
            ->getRow()
            ->ConductedSessionsCount;
    }
    public function save_schedule_data() {
        $i = 0;
        $DAY_ARRAY = $_POST["DAY_ARRAY"];
        $START_TIME_SEC = $_POST["START_TIME"];
        $START_TIME_ARRAY = $_POST["START_TIME"];
        $END_TIME_ARRAY = $_POST["END_TIME"];
        $END_TIME_SEC = $_POST["END_TIME"];
        $error_flag = 0;
        // echo '<pre>';print_r($DAY_ARRAY);die;
        foreach ($DAY_ARRAY as $day) {
            if( (isset($DAY_ARRAY[$i]) && !empty($DAY_ARRAY[$i])) && (isset($START_TIME_ARRAY[$i]) && !empty($START_TIME_ARRAY[$i])) && (isset($END_TIME_ARRAY[$i]) && !empty($END_TIME_ARRAY[$i])) ) {
                $insertdata = array(
                    "USER_ID" => ($_SESSION['sessiondata']['id']),    
                    "DAY_NAME" => $DAY_ARRAY[$i],    
                    "START_TIME" => date("H:i:s", strtotime($START_TIME_ARRAY[$i])),
                    "END_TIME" => date("H:i:s", strtotime($END_TIME_ARRAY[$i])),    
                    "IS_VACATION" => "0",
                    "IS_ACTIVE" => "Y",    
                    "IS_DELETED" => "N",    
                    "ENTRY_SOURCE" => "web"
                );
                $result= $this->db->table('schedule_details')->insert($insertdata);
                if ($result) {
                    return true;
                }else {
                    return false;
                }
            }else {
                $error_flag++;
            }
            $i++;
        }
    }
}    