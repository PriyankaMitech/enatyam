<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\BillingM;
use CodeIgniter\Config\Services;
use App\Models\AdminModel;


class BillingC extends BaseController
{

    protected $session;

    public function __construct()
    {
        $this->session = Services::session();
    }
    public function BillingInformation()
    {
        $model = new AdminModel();

        $BillingM = new BillingM();
        $session = session();
        $wherecond = ['Coupan_code' => $this->request->getPost('coupon_code')];
        $coupandata = $model->get_single_data('coupan_code', $wherecond);
        $ccdiscount = 0;
        if(!empty($coupandata)){
            $ccdiscount = $coupandata->percentage;
        }
        // echo "<pre>";print_r($coupandata);exit();
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
                'coupon_code' => $this->request->getPost('coupon_code'),
                'ccdiscount' => $ccdiscount,
            ];
            $db = \Config\Database::Connect();

            $BillingM->insert($insertdata);

            $user_id = $_SESSION['id'];
            // echo $this->request->getGet('id');
            // echo "<pre>";print_r($_SESSION);exit();
            $updatedata = [];
            if($_SESSION['PricingType_Id'] == '1' || $_SESSION['PricingType_Id'] == '2' || $_SESSION['PricingType_Id'] == '3'){

            $updatedata = [
                'country' => $this->request->getPost('country'),
                'SessionType' => 'OneToOneSession',
            ];
            }else if($_SESSION['PricingType_Id'] == '4' || $_SESSION['PricingType_Id'] == '4' || $_SESSION['PricingType_Id'] == '6'){
                $updatedata = [
                    'country' => $this->request->getPost('country'),
                    'SessionType' => 'GroupSession',
                ];
            }


            $update_data = $db->table('register')->where('id',$user_id);
            $update_data->update($updatedata);

            // $country = $this->request->getPost('country');
            // $result = $BillingM->updateCountry($country);
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

        // echo "<pre>";print_r($data['billingdetails']);exit();
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
