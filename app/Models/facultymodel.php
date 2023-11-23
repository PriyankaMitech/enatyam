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
        $this->db->table($this->table2)->insert($data);

        // Update the 'video_name' column in the 'students' table
        $this->db->table($this->table)
            ->where('student_id', $studentId)
            ->update(['video_name' => $videoFilename]);
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
        if (!empty($data) && is_array($data)) {
            $this->db->table('schedule')->insertBatch($data);
            return true; // Success
        } else {
            return false; // Failed to insert data
        }
    }
    public function fetchshedule($registerId)
    {
        $slots = $this->db->table('schedule')
            ->select('*')
            ->where('faculty_id', $registerId)
            ->get()
            ->getResult();
        return $slots;
    }
}
public function fetchshedule($registerId)
{
    $slots = $this->db->table('schedule')
      ->select('*')
        ->where('faculty_register_id', $registerId)
        ->get()
        ->getResult();
return $slots;

}
