<?php

namespace App\Controllers;

use App\Models\AdminCalenderM;
use CodeIgniter\Controller;

class AdminCalenderController extends BaseController
{

    public function saveEvent()
    {
        $request = service('request');
        $title = $request->getPost('title');
        $start = $request->getPost('start');
        $end = $request->getPost('end');
        print_r($end);
        die;

        $eventModel = new AdminCalenderM();
        $eventModel->insert([
            'title' => $title,
            'start_date' => $start,
            'end_date' => $end,
        ]);

        return json_encode(['status' => 'success']);
    }
}
