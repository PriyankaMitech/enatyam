<?php

namespace App\Models;

use CodeIgniter\Model;

class CarrierModel extends Model
{
    protected $table = 'carrier';
    protected $primaryKey = 'D_id';
    protected $allowedFields = ['D_id', 'name', 'email', 'phone', 'course', 'sub_course', 'Country', 'State', 'District', 'Result_of_application', 'Status', 'course_certificates_filename', 'education_certificates_filename', 'cv_filename','profile_photo','videos','img','education','exprience'];

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
    public function  insertTable2Data($otherTableData)
    {

        $this->db->table('faculty')->insert($otherTableData);
    }
}
