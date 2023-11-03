<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CarrierModel;

class CarrierController extends BaseController
{
    public function carrier_h()
    {
      
        $carrierModel = new CarrierModel();

        //if ($this->request->getMethod() === 'post') {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'course' => $this->request->getPost('course'),
                'sub_course' => $this->request->getPost('sub_course'),
                'Country' => $this->request->getPost('Country'),
                'State' => $this->request->getPost('State'),
                'District' => $this->request->getPost('District'),
                'Result_of_application' => 'Pending',
                'Stetus'=>'N',
            ];
           
            $carrierModel->save($data);
            return redirect()->to('Home');
        }
        
            // echo "Inside else";
            // $this->session->set('username', $this->request->getVar('full_name'));
            // $full_name = $this->session->set('email', $this->request->getVar('email'));
            // echo "full_name===".$full_name;
         
        
           
            
                
            

           // $demoModel->insert($data); // Assuming you have a model to handle database interactions

            // You can add further logic here, like sending emails or displaying success messages.
        

       // return view('Home'); // Load a view after form submission
    }


