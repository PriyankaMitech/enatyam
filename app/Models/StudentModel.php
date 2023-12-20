<?php 
namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table1 ='register'; 
    protected $table = 'uplode_study_video_from_student'; // Set the table name
    protected $primaryKey = 'vidio_id';
    protected $allowedFields = ['vidio_id','name','Faculty_id','register_id','Student_name'];

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


    public function getUserByEmail($email){
        return $this->db->table($this->table1)
            ->where('email', $email)
            ->where('role', 'student')
            ->get()
            ->getRow();
        }

        public function fetchProfileDate($registerId){
            return $this->db->table($this->table1)
            ->where('id', $registerId)
            ->get()
            ->getResult();
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
        public function changeCountry($registerId,$Country)
        {
            return $this->db->table('register')
            ->set('country' , $Country,)
            ->where('id', $registerId)
            ->update();
        }
        public function fetchid($registerId)
        {
            return $this->db->table($this->table1)->where('id', $registerId)->get()->getRow();
        }
        // public function fetchdataFromid($assignTeacherId)
        // {
        //     return $this->db->table('schedule')->where('faculty_register_id', $assignTeacherId)->get()
        //     ->getResult();
        // }

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
            return $this->db->table('schedule')->where('student_register_id', $user_id) ->get()
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
}