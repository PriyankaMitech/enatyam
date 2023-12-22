<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;
use App\Models\LoginModel;

class ZoomApiController extends BaseController
{
    public function is_table_empty() {
        $result = $this->db->query("SELECT id FROM zoom_oauth WHERE provider = 'zoom'");
        if($result->num_rows) {
            return false;
        }
 
        return true;
    }

    public function get_access_token() {
        $sql = $this->db->query("SELECT provider_value FROM zoom_oauth WHERE provider = 'zoom'");
        $result = $sql->fetch_assoc();
        return json_decode($result['provider_value']);
    }

    public function get_refresh_token() {
        $result = $this->get_access_token();
        return $result->refresh_token;
    }
 
    public function update_access_token($token) {
        if($this->is_table_empty()) {
            $this->db->query("INSERT INTO zoom_oauth(provider, provider_value) VALUES('zoom', '$token')");
        } else {
            $this->db->query("UPDATE zoom_oauth SET provider_value = '$token' WHERE provider = 'zoom'");
        }
    }

    function verify(){
        $data = '{
            "clientId": "88d7346c8674587bc95f8fbde2e33acd",
            "username": "edgeexcellence@woohoo.in",
            "password": "Welcome@123" }';
    
        $ch = curl_init('https://sandbox.woohoo.in/oauth2/verify');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        # Return response instead of printing.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }
}