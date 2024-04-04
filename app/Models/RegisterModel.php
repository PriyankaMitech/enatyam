<?php 

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'register'; // Change to your actual table name
    protected $allowedFields = ['full_name', 'email', 'password', 'is_instructor'];

    public function saveContactUs($data)
    {
      //  $res =  $this->db->table('tbl_contact')->insert($data);
       
    }

    
    public function checkOfflineAddress($pincode)
    {
       $res =   $this->db->table('tbl_offlinestudio')->where('pincode', $pincode)->get()->getResult();
       if($res){
        // echo'<pre>';print_r($res);die;
        return $res;
       }
       else{
        return false;
       }
       
    }
}
