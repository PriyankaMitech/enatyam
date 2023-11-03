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
 
}