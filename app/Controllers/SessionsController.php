<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SessionModel;

class SessionsController extends BaseController
{
    public function store()
    {
        // Create a new instance of the model
        $sessionModel = new SessionModel();

        // Get data from the form
        $data = [
            'name' => $this->request->getPost('name'),
            'duration' => $this->request->getPost('duration'),
            'price_per_session' => $this->request->getPost('price_per_session'),
            'total_price' => $this->request->getPost('total_price'),
            'image_path' => $this->request->getPost('image_path'),
            'description' => $this->request->getPost('description'),
            'features' => $this->request->getPost('features')
        ];

        // Insert data into the database
        $sessionModel->insert($data);

        // Redirect to a success page or perform other actions as needed
        return redirect()->to('/Checkout');
    }
}
