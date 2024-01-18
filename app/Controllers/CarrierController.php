<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CarrierModel;

class CarrierController extends BaseController
{

    public function carrier_h()
    {
        $carrierModel = new CarrierModel();




        if ($this->request->getMethod() === 'post') {
            // Handle file uploads
            $cvFile = $this->request->getFile('cvFile');
            $educationCertificatesFile = $this->request->getFile('educaionCertificateFile');
            $courseCertificatesFile = $this->request->getFile('courseCertificateFile');
            $profile_photo = $this->request->getFile('profile_photo');
            $videos = $this->request->getFile('videos');
            $img = $this->request->getFile('img');
            $cvFileName = '';
            $educationCertificatesFileName = '';
            $courseCertificatesFileName = '';
            $profile_photoFileName = '';
            $videosFileName = '';
            $imgFileName = '';

            // Debugging: Check if video file is uploaded
            if ($videos && $videos->isValid()) {
                "Video Name: " . $videos->getName() . '<br>';
                "Video Size: " . $videos->getSize() . '<br>';
                "Video Type: " . $videos->getClientMimeType() . '<br>';
            }

            // Check if all files are uploaded and valid
            if (
                ($cvFile && $cvFile->isValid()) ||
                ($educationCertificatesFile && $educationCertificatesFile->isValid()) ||
                ($courseCertificatesFile && $courseCertificatesFile->isValid()) ||
                ($profile_photo && $profile_photo->isValid()) ||
                ($videos && $videos->isValid()) ||
                ($img && $img->isValid())
            ) {
                echo "hiii";

                // Define the destination folders using FCPATH
                $uploadPath = FCPATH . 'public/uploads/cv';
                $uploadPath1 = FCPATH . 'public/uploads/educationCertificates';
                $uploadPath2 = FCPATH . 'public/uploads/courseCertificates';
                $uploadPath3 = FCPATH . 'public/uploads/profile_photo';
                $uploadPath4 = FCPATH . 'public/uploads/videos';
                $uploadPath5 = FCPATH . 'public/uploads/images';

                // Initialize file names
                $cvFileName = $educationCertificatesFileName = $courseCertificatesFileName = '';
                $profile_photoFileName = $videosFileName = $imgFileName = '';

                // Move the uploaded files to the destination folders (if available)
                if ($cvFile && $cvFile->isValid()) {
                    $cvFileName = $cvFile->getName();
                    $cvFile->move($uploadPath, $cvFileName);
                }

                if ($educationCertificatesFile && $educationCertificatesFile->isValid()) {
                    $educationCertificatesFileName = $educationCertificatesFile->getName();
                    $educationCertificatesFile->move($uploadPath1, $educationCertificatesFileName);
                }

                if ($courseCertificatesFile && $courseCertificatesFile->isValid()) {
                    $courseCertificatesFileName = $courseCertificatesFile->getName();
                    $courseCertificatesFile->move($uploadPath2, $courseCertificatesFileName);
                }

                if ($profile_photo && $profile_photo->isValid()) {
                    $profile_photoFileName = $profile_photo->getName();
                    $profile_photo->move($uploadPath3, $profile_photoFileName);
                }

                if ($videos && $videos->isValid()) {
                    $videosFileName = $videos->getName();
                    $videos->move($uploadPath4, $videosFileName);
                }

                if ($img && $img->isValid()) {
                    $imgFileName = $img->getName();
                    $img->move($uploadPath5, $imgFileName);
                }
            }
            // Insert data into the database
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'course' => $this->request->getPost('courses'),
                'sub_course' => $this->request->getPost('sub_courses'),
                'Country' => $this->request->getPost('Country'),
                'State' => $this->request->getPost('State'),
                'District' => $this->request->getPost('District'),
                'Result_of_application' => 'Pending',
                'Status' => 'N',
                'education' => $this->request->getPost('education'),
                'exprience' => $this->request->getPost('experience'),
                'cv_filename' => $cvFileName,
                'education_certificates_filename' => $educationCertificatesFileName,
                'course_certificates_filename' => $courseCertificatesFileName,
                'profile_photo' => $profile_photoFileName,
                'videos' => $videosFileName,
                'img' => $imgFileName,
            ];

            // echo "<pre>";print_r($data);exit();


            $carrierModel->save($data);
            $session = session();
            $session->setFlashdata('success', 'Application has been submitted successfully.');
            return redirect()->to('Home');
        }
    }
}
