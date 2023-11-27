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
        return view('chat');
    }
}