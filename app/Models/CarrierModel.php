<?php 

namespace App\Models;

use CodeIgniter\Model;

class CarrierModel extends Model
{
    protected $table = 'Carrier'; // Change to your actual table name
    protected $primaryKey = 'D_id';
    protected $allowedFields = ['D_id','name', 'email', 'phone', 'course', 'sub_course', 'Country', 'State', 'District','Result_of_application','Stetus','course_certificates_filename','education_certificates_filename', 'cv_filename',];

	public function getcarreerByfaculty()
    {
        return $this->db->table('carrier')
        ->select('*')
        ->get()
        ->getResult();
    }

    public function getresultofResultofapplication($D_id)
    {
        return $this->where('D_id', $D_id)
            ->first();
    }
    public function  insertTable2Data($otherTableData){

        $this->db->table('faculty')->insert($otherTableData);
     }
    
}
