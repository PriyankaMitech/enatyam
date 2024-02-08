<?php 

namespace App\Models;

use CodeIgniter\Model;

class DemoModel extends Model
{
    protected $table = 'free_demo_table'; // Change to your actual table name
    protected $allowedFields = ['name', 'email', 'phone', 'course', 'sub_course', 'Age', 'exprience,','AssignTecher_id', 'information', 'Country', 'city', 'Book_Date_Time','Book_Date',];

    public function getTodayDemo($currentDate, $registerId)
    {
        return $this->where('AssignTecher_id', $registerId)
            ->where('DATE(Book_Date)', $currentDate)
            ->findAll();
    }
    public function getAssignTecherData($registerId)
    {
        return $this->where('AssignTecher_id', $registerId)->findAll();
    }

    public function  demoreshedule($D_id, $action) {
        return $this->db->table('free_demo_table')
            ->where('D_id', $D_id)
            ->update(['Conducted_Demo' => $action]);
            
    }
}
