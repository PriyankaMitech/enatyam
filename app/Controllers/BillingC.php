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
             
                'pincode'=> $this->request->getPost('pincode'),
                'phone' => $this->request->getPost('phone'),
                'email' => $this->request->getPost('email'),

                
            ];

            $BillingM->insert($data); // Assuming you have a model to handle database interactions
            $this->session->setFlashdata('success', 'Order Placed successfully.');
            
        }

        return redirect()->to('Checkout'); // Load a view after form submission
    }
}

