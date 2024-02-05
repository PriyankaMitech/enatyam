<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BillingM;
use CodeIgniter\Config\Services;

class BillingC extends BaseController
{

    protected $session;

    public function __construct()
    {
        $this->session = Services::session();
    }
    public function BillingInformation()
    {
        $BillingM = new BillingM();
        $session = session();
        if ($this->request->getMethod() === 'post') {
            $insertdata = [
                'Fname' => $this->request->getPost('Fname'),
                'Lname' => $this->request->getPost('Lname'),
                'notes' => $this->request->getPost('notes'),
                'country' => $this->request->getPost('country'),
                'address' => $this->request->getPost('address'),
                'city' => $this->request->getPost('city'),

                'pincode' => $this->request->getPost('pincode'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),


            ];
            $BillingM->insert($insertdata);
            $country = $this->request->getPost('country');
            $result = $BillingM->updateCountry($country);
            // print_r($result);
            // die;

            $lastinsert_id = $BillingM->getInsertID();
        }

        $data['id'] = $this->session->get('PricingType_Id');
        $billingModel = new BillingM();
        $matchingRecords = $billingModel->getSessionPricingData($data['id']);

        $data['matchingRecords'] = $matchingRecords;
        $data['billingdetails'] = $insertdata;

        $data['title'] = 'Checkout payment ';
        $data['return_url'] = site_url() . 'PaymentController/callback';
        $data['surl'] = site_url() . 'PaymentController/success';;
        $data['furl'] = site_url() . 'PaymentController/failed';;
        $data['currency_code'] = 'INR';
        $data['lastinsert_id'] = $lastinsert_id;
        return view('OrderDetails', $data);
    }

    public function Checkout()
    {
        $session = session();

        $id = $this->request->getGet('id');

        if (!(session()->get('sessiondata'))) {

            echo "Not set session";
        } else {
            $billingModel = new BillingM(); // Load the model
            $matchingRecords = $billingModel->getSessionPricingData($id);
            $PricingId = '';

            if ($matchingRecords !== null) {
                $PricingId = $matchingRecords->PricingType_Id;
            }

            // $PricingId = $matchingRecords->PricingType_Id;
            $res = $this->session->set('PricingType_Id', $PricingId);


            $data['matchingRecords'] = $matchingRecords;

            return view('Checkout', $data);
        }
    }
}
