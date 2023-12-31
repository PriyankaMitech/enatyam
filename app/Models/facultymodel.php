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
        //  echo '<pre>';print_r($this->getLastQuery());die;
        return $videos;
        //   print_r($videos);die;
    }
    public function getstudentvideo($registerId)
      {
        $query = $this->db->table('uplode_study_video_from_student svf')
        ->join('student s', 's.register_id = svf.register_id')
        ->select('svf.name, svf.DateTime, s.student_name')
        ->where('svf.register_id', $registerId)
        ->get();
   // print_r($query);die;
    return $query->getResult();
            
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
            ->select('day, start_time, end_time ,student_register_id') 
            ->where('faculty_register_id', $facultyRegisterId);
        $result = $query->get()->getResultArray(); 
    
        return $result;
    }
    public function fetchshedule($registerId)
    {

        $result = $this->db->table('schedule')
            ->select('schedule.*, register.full_name as faculty_name, student.full_name as student_name,')
            ->join('register', 'register.id = schedule.faculty_register_id')
            ->join('register as student', 'student.id = schedule.student_register_id', 'left')
            ->where('schedule.faculty_register_id', $registerId)
            ->where('schedule.student_register_id IS NOT NULL')
            ->get()
            ->getResult();
        // echo $this->db->getLastQuery();die;
        
        return $result;

    }

//     public function fetchshedule($registerId)
//     {

//         $result = $this->db->table('schedule')
//         ->select('schedule.*, register.full_name as faculty_name, student.full_name as student_name, payment.no_of_session')
//         ->join('register', 'register.id = schedule.faculty_register_id')
//         ->join('register as student', 'student.id = schedule.student_register_id', 'left')
//         ->join('payment', 'schedule.student_register_id = payment.user_id', 'left') // Join the payment table
//         ->where('schedule.faculty_register_id', $registerId)
//         ->where('schedule.student_register_id IS NOT NULL')
//         ->get()
//         ->getResult();

//     // echo $this->db->getLastQuery();die;

//     return $result;
// }
    
    public function fetchshedule1($registerId)
    {
        $currentMonth = date('m'); // Get the current month in the format 'mm'
        $day = 'Monday';
        $result = $this->db->table('schedule_details as sd')
            ->select('sd.*, register.full_name as faculty_name')
            ->join('register', 'register.id = sd.USER_ID')
            // ->join('register as student', 'student.id = sd.student_register_id', 'left')
            ->where('sd.USER_ID', $registerId)
            // ->where('sd.student_register_id IS NOT NULL')
            // ->where("MONTH(sd.date) = $currentMonth")
            ->where('DAYOFWEEK(sd.DAY_NAME) = 2')
            ->get()
            ->getResult();
        echo $this->db->getLastQuery();die;
        
        return $result;

        }
    public function gettodayssessiontofaculty($teacherId)
    {
       
    $today = date('Y-m-d');
    $dayOfWeek = date('l', strtotime($today));

    $query = $this->db->table('schedule')
                     ->select('schedule.*, register.full_name') // Select necessary columns
                     ->join('register', 'register.id = schedule.student_register_id', 'left') // Perform a left join
                     ->where('schedule.faculty_register_id', $teacherId)
                     ->where('schedule.Day', $dayOfWeek)
                     ->where('schedule.student_register_id >', 0)
                     ->get();

    return $query->getResult();
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

    public function saveSchedule($data)
    {
       // print_r($_POST);die;
        $optionType = $data['option_type'];
        $selectedDays = $data['days'];
        $faculty_registerid = $data['session_id'];
        $start_datetime = strtotime($data['start_datetime']);
        $end_datetime = strtotime($data['end_datetime']);
    
        $startTime = date('H:i:s', $start_datetime);
        $endTime = date('H:i:s', $end_datetime);
    
        while ($start_datetime <= $end_datetime) {
            $currentDay = date('l', $start_datetime);
            $currentDate = date('Y-m-d', $start_datetime);
    
            if ($optionType === 'allDay' || in_array($currentDay, $selectedDays)) {
                $current_datetime_start = $currentDate . ' ' . $startTime;
                $current_datetime_end = $currentDate . ' ' . $endTime;
    
                $this->db->table('schedule_list')->insert([
                    'OptionType'=> $optionType,
                    'start_datetime' => $current_datetime_start,
                    'end_datetime' => $current_datetime_end,
                    'faculty_registerid' => $faculty_registerid,
                    'Daystype' => $currentDay,
                ]);
            }
            $start_datetime = strtotime('+1 day', $start_datetime);
        }
    
        return true;
    }
}    