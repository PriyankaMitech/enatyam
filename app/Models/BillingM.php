<?php

namespace App\Models;

use CodeIgniter\Model;

class BillingM extends Model
{
    protected $table = 'billing_details'; // Change to your actual table name
    protected $allowedFields = ['Fname',  'Lname', 'notes', 'country', 'address', 'city', 'pincode', 'phone', 'email'];

    public function getSessionPricingData($id)
    {
        // $session = session();

        $sessionPricingData =  $this->db->table('sessions_pricing')
            ->select('*')
            ->where('PricingType_Id', $id)
            ->get()
            ->getResult();

        $PricingType_Id = ($sessionPricingData[0]->PricingType_Id);
        // echo $PricingType_Id;
        // die;



        return $sessionPricingData;

        // die;
    }
}
