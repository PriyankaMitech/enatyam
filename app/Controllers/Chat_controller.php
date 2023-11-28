<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CarrierModel;
use App\Models\LoginModel;
use CodeIgniter\Controller;

class Chat_controller extends BaseController
{
    public function chat()
    {
        $db = \Config\Database::connect();

        $data['db'] = $db;
        return view('chat',$data);
    }
}