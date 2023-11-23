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

        if ($this->request->getMethod() === 'post') {
            $data = [
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

            $BillingM->insert($data); // Assuming you have a model to handle database interactions
            $this->session->setFlashdata('success', 'Order Placed successfully.');
        }

        $id = $this->session->get('PricingType_Id');
        // echo $id;
        // die;
        $billingModel = new BillingM();
        $matchingRecords = $billingModel->getSessionPricingData($id);
        // Pass the data to the view
        $data['matchingRecords'] = $matchingRecords;
        // print_r($data);
        // die;

        // return redirect()->to('OrderDetails'); // Load a view after form submission
        return view('OrderDetails', $data);
    }

    public function Checkout()
    {
        $session = session();

        $id = $this->request->getGet('id');
        // echo $id;

        if (!(session()->get('sessiondata'))) {

            echo "Not set session";
            //  $("#loginformpopup").modal('toggle');
        } else {
            // echo $id;
            // echo $1;
            $billingModel = new BillingM(); // Load the model
            // $matchingRecords['SessionPricingData'] = $matchModel->getSessionPricingData($id);
            $matchingRecords = $billingModel->getSessionPricingData($id);
            // print_r($matchingRecords);
            // die;

            $PricingId = $matchingRecords->PricingType_Id;
            $res = $this->session->set('PricingType_Id', $PricingId);

            // print_r($matchingRecords);
            // die;
            // echo $this->session->get('PricingType_Id');
            // die;

            // Pass the data to the view
            $data['matchingRecords'] = $matchingRecords;

            return view('Checkout', $data);
        }
    }
}
