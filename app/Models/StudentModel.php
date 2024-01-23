<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table1 = 'register';
    protected $table = 'uplode_study_video_from_student'; // Set the table name
    protected $primaryKey = 'vidio_id';
    protected $allowedFields = ['vidio_id', 'name', 'Faculty_id', 'register_id', 'Student_name'];

    public function getAllRegisterData($registerId)
    {

        return $this->db->table($this->table1)
            ->where('id', $registerId)
            ->get()
            ->getResult();


        // return  $this->db->table('register s')
        //     ->join('uplode_study_video_from_student sv', 'sv.register_id = s.id')
        //   //  ->select('s.student_id, sv.video_name')
        //     ->where('id', $registerId)
        //     ->get()
        //     ->getResult();
        //    echo '<pre>';print_r($this->getLastQuery());die;
    }


    public function getUserByEmail($email)
    {
        return $this->db->table($this->table1)
            ->where('email', $email)
            ->where('role', 'student')
            ->get()
            ->getRow();
    }

    public function fetchProfileDate($registerId)
    {
        $result = $this->db->table($this->table1)
            ->select($this->table1 . '.*, countries.code, sub_courses.sub_courses_name, courses.courses_name')
            ->join('countries', 'countries.name = ' . $this->table1 . '.country', 'left')
            ->join('tbl_sub_courses as sub_courses', 'sub_courses.id = ' . $this->table1 . '.sub_course', 'left')
            ->join('tbl_courses as courses', 'courses.id = sub_courses.courses_id', 'left')
            ->where($this->table1 . '.id', $registerId)
            ->get()
            ->getResult();

        // echo '<pre>';
        // print_r($result);
        // die;
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }
    public function insertSelectedSlotdByStudents($data)
    {
        if (!empty($data) && is_array($data)) {
            $this->db->table('Student_Slots_tbl')->insertBatch($data);
            return true; // Success
        } else {
            return false; // Failed to insert data
        }
    }

    public function getStudendByEmail($email)
    {
        return $this->db->table($this->table1)->where('email', $email)->get()->getRow();
    }

    // Function to update the password
    public function updatePassword($userId, $newPassword)
    {
        return $this->db->table('register')
            ->set(['password' => $newPassword, 'confirm_pass' => $newPassword])
            ->where('id', $userId)
            ->update();
    }
    public function changeCountry($registerId, $Country)
    {
        return $this->db->table('register')
            ->set('country', $Country,)
            ->where('id', $registerId)
            ->update();
    }

    // public function getCountryCodeFromDatabase()
    // {
    //     $countryCode = $this->db->table('countries')->where('name', $Country)->get()->getRow();
    //     // print_r($countryCode);die;
    // }

    public function updateCountry($Country, $registerId)
    {

        // $countryCode = 0;
        // $countryName = array('name' => $Country);
        // $this->db->where('id', $registerId);
        // $updateCountry =  $this->db->update('register', $countryName);

        $updateCountry = $this->db->table('register')
            ->set('country', $Country)
            ->where('id', $registerId)
            ->update();

        // print_r($updateCountry);
        // die;

        // $countryData =  $this->db->table('countries')
        //     ->select('*')
        //     ->get()
        //     ->getResult();
        // print_r($countryData);
        // die;
        if ($updateCountry) {
            return $updateCountry;
        } else {
            return false;
        }
    }

    public function fetchid($registerId)
    {
        return $this->db->table($this->table1)->where('id', $registerId)->get()->getRow();
    }


    public function fetchdataFromid($assignTeacherId, $registerId)
    {
        $query = $this->db->table('schedule')
            ->join('register', 'register.id = schedule.faculty_register_id')
            ->where('schedule.faculty_register_id', $assignTeacherId);

        if ($this->isRegisterIdPresent($registerId)) {
            return null;
        }
        $result = $query
            ->where('schedule.student_register_id', null)
            ->select('register.full_name, schedule.*')
            ->get()
            ->getResult();
        return $result;
    }
    private function isRegisterIdPresent($registerId)
    {
        $result = $this->db->table('schedule')
            ->where('student_register_id', $registerId)
            ->countAllResults();
        return $result > 0;
    }
    public function updateData($selectedId, $dataToUpdate, $registerId)
    {
        $student_register_id = $dataToUpdate['student_register_id'];
        $session_start_date = $dataToUpdate['session_start_date'];
        $dates = $this->db->table('schedule')
            ->set('student_register_id', $student_register_id)
            ->set('session_start_date', $session_start_date)
            ->where('id', $selectedId)
            ->update();
        return $dates;
    }

    public function get_user_Session($user_id)
    {
        $query = $this->db->table('student')
            ->select('student.*, payment.no_of_session') // Select specific columns
            ->where('student.register_id', $user_id)
            ->join('payment', 'student.register_id = payment.user_id', 'left') // Adjust the join type as needed (left, right, inner)
            ->get();
        return $query->getRow();
    }
    public function Getseslectedslotstostudent($user_id)
    {
        return $this->db->table('schedule')->where('student_register_id', $user_id)->get()
            ->getResult();
    }

    public function insertFormData($data, $registerId)
    {
        try {
            $registerRecord = $this->db->table('register')
                ->where('id', $registerId)
                ->get()
                ->getRow();

            if ($registerRecord) {
                $assignTeacherId = $registerRecord->Assign_Techer_id;
                $data['Assign_Techer_id'] = $assignTeacherId;
                $this->db->table('tbl_reschedul')->insert($data);
                return true; // Indicate success
            } else {
                return false; // Indicate failure
            }
        } catch (\Exception $e) {
            log_message('error', 'Error in insertFormData: ' . $e->getMessage());
            return false; // Indicate failure
        }
    }
    public function fetchafacultyslots($assignTeacherId)
    {
        $query = $this->db->table('schedule_list')
            ->where('faculty_registerid', $assignTeacherId)
            ->get()
            ->getResult();

        return $query;
    }
    public function insertStudentSlot($data)
    {
        //  print_r($data);die;
        if ($data['option_type'] == 'day') {
            $days = implode(',', $data['days']);

            $insertData = [
                'option_type' => $data['option_type'],
                'days' => $days,
                'selected_time_period' => $data['selected_time_period'],
                'student_register_id' => $data['student_register_id'],
                'Assign_Techer_id' => $data['Assign_Techer_id'],
            ];
        } else {
            $insertData = [
                'option_type' => $data['option_type'],
                'selected_time_period' => $data['selected_time_period'],
                'student_register_id' => $data['student_register_id'],
                'Assign_Techer_id' => $data['Assign_Techer_id'],
            ];
        }

        $this->db->table('student_slots_tbl')->insert($insertData);
    }
    public function checkSlotAvailability($selectedSlot, $teacherId)
    {
        $result = $this->db->table('tbl_student_shedule')
            ->where([
                'shedules_time' => $selectedSlot,
                'faculty_id' => $teacherId,
            ])->get()->getResult();
        // echo '<pre>';print_r($result);die;
        if (!empty($result)) {
            return $result;
        } else {
            return true;
        }
    }

    public function getVideosByRegisterId($registerId, $Assign_Techer_id)
    {
        $videos = $this->db->table('student s')
            ->join('uplode_video_to_student sv', 'sv.student_id = s.student_id')
            //->join('register', 'register.id = sv.register_id')
            ->select('s.student_id, sv.video_name, sv.DateTime')
            ->where('s.register_id', $registerId)
            ->where('sv.register_faculty_id', $Assign_Techer_id) // Add this line for the second where condition
            ->get()
            ->getResult();

        // echo '<pre>';
        // print_r($this->getLastQuery());
        // die;
        return $videos;

        // $query = $this->db->table('uplode_video_to_student uvts')
        //     ->join('register', 'register.register_id = uvts.register_id')
        //     ->select('uvts.*, register.full_name')
        //     ->where('uvts.register_faculty_id', $Assign_Techer_id)
        //     ->get();
        // // print_r($query);die;
        // return $query->getResult();
    }

}
// public function getattandance($registerId)
// {
//     // Query the 'attendeance_table' table to get attendance data for a specific student
//     return $this->db->table('attendeance_table')
//         ->where('student_registerid', $registerId)
//         ->get()
//         ->getResult();
// }
public function getattandance($registerId)
{
 
    $result = $this->db->table('attendeance_table')
        ->join('register', 'register.id = attendeance_table.student_registerid')
        ->where('attendeance_table.student_registerid', $registerId)
        ->get()
        ->getResult();

    return $result;
}

}
