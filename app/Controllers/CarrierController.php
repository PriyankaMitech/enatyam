<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CarrierModel;

class CarrierController extends BaseController
{
    // public function carrier_h()
    // {
      
    //     $carrierModel = new CarrierModel();

    //     //if ($this->request->getMethod() === 'post') {
    //         $data = [
    //             'name' => $this->request->getPost('name'),
    //             'email' => $this->request->getPost('email'),
    //             'phone' => $this->request->getPost('phone'),
    //             'course' => $this->request->getPost('course'),
    //             'sub_course' => $this->request->getPost('sub_course'),
    //             'Country' => $this->request->getPost('Country'),
    //             'State' => $this->request->getPost('State'),
    //             'District' => $this->request->getPost('District'),
    //             'Result_of_application' => 'Pending',
    //             'Stetus'=>'N',
    //         ];
           
    //         $carrierModel->save($data);
    //         return redirect()->to('Home');
    //     }
    public function carrier_h()
{
    $carrierModel = new CarrierModel();

    if ($this->request->getMethod() === 'post') {
        // Handle file uploads
        $cvFile = $this->request->getFile('Cv');
        $educationCertificatesFile = $this->request->getFile('EducationCertificates');
        $courseCertificatesFile = $this->request->getFile('courseCertificates');

        // Check if the files were uploaded and are valid
        if ($cvFile && $cvFile->isValid() && $educationCertificatesFile && $educationCertificatesFile->isValid() && $courseCertificatesFile && $courseCertificatesFile->isValid()) {
            // Define the destination folders using FCPATH
            $uploadPath = FCPATH . 'public/uploads/cv';
            $uploadPath1 = FCPATH . 'public/uploads/educationCertificates';
            $uploadPath2 = FCPATH . 'public/uploads/courseCertificates';

            // Get the original file names
            $cvFileName = $cvFile->getName();
            $educationCertificatesFileName = $educationCertificatesFile->getName();
            $courseCertificatesFileName = $courseCertificatesFile->getName();

            // Move the uploaded files to the destination folders
            $cvFile->move($uploadPath, $cvFileName);
            $educationCertificatesFile->move($uploadPath1, $educationCertificatesFileName);
            $courseCertificatesFile->move($uploadPath2, $courseCertificatesFileName);
//print_r($cvFile);die;
        // Insert data into the database
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
            'Status' => 'N',
            'cv_filename' => $cvFileName,
            'education_certificates_filename' => $educationCertificatesFileName,
            'course_certificates_filename' => $courseCertificatesFileName,
        ];
//print_r($data);die;
        $carrierModel->save($data);
        return redirect()->to('Home');
    }
}
    }

}
