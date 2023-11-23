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
            ->getRow();


        if (!empty($sessionPricingData)) {
            // print_r($sessionPricingData);
            // die;


            $PricingType_Id = ($sessionPricingData->PricingType_Id);
        }
        // echo $PricingType_Id;
        // die;



        return $sessionPricingData;

        // die;
    }
}
