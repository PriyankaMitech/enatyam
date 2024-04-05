<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisterModel;


class RegisterController extends BaseController
{
    var $baseURL = null;
    public function __construct() {
        $this->baseURL = config(App::class)->baseURL;

    }
    public function register() {
        $registerModel = new RegisterModel();

        if ($this->request->getMethod() === 'post') {
            $data = [
                'full_name' => $this->request->getPost('full_name'),
                'email' => $this->request->getPost('email'),
                'password' => (password_hash(strval($this->request->getPost('password')), PASSWORD_DEFAULT)),
                'is_instructor' => ($this->request->getPOST("become_teacher") == "on") ? 1 : 0
            ];

            $registerModel->insert($data); // Assuming you have a model to handle database interactions           
            // You can add further logic here, like sending emails or displaying success messages.
              // Store data in the session
        }        
        //return view('my_account'); // Load a view after form submission
        //redirect("home");
        return redirect()->to('/home');
    }
   
	public function validateLogin() {
        $session = session();
        $registerModel = new RegisterModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $registerModel->where('email', $email)->first();
        
        if($data){  
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['full_name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/home');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/home');
        }
    }

    public function contact(){
        $session = session();
        $registerModel = new RegisterModel();
        $contactData =[
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'mobNumber' => $this->request->getVar('mobNumber'),
            'interestedIn' => $this->request->getVar('interestedIn'),
            'message' => $this->request->getVar('message')
        ];
        
        // If message is empty, replace it with a dash
        $message = !empty($contactData['message']) ? $contactData['message'] : "-";
    
        // Construct the message with line breaks
        $msg = "Contact us Form Details:\nName: ".$contactData['name']."\nEmail: ".$contactData['email']."\nMobile Number: ".$contactData['mobNumber']."\nInterested In: ".$contactData['interestedIn']."\nMessage: ".$message;
    
        $templates = "930840461869403";
        
        // Send message using whatsappadmin function
        whatsappadmin($templates, $msg);
         return redirect()->to('/');

    }
    

    public function offlineAddress() {
        $session = session();
        $registerModel = new RegisterModel();
        $pincode = $this->request->getVar('pincode');
        $result = $registerModel->checkOfflineAddress($pincode);
        // Perform necessary operations to get the address based on the pincode
        if ($result) {
            $address = $result; // Get address based on pincode
            // Encode the address array as JSON and return
            return json_encode($address);
        } else {
            // If no address found, return appropriate response
            return "No address found for this pincode.";
        }
    }
    

}