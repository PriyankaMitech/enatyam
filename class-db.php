<?php
class DB {

    private $dbHost     = "ftp.nahichaltahai.org";
    private $dbUsername = "nahichal_enatyam";
    private $dbPassword = "enatyam@123#";
    private $dbName     = "nahichal_enatyam";
 
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
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
        // echo 'l;dfd';die;
        if($this->is_table_empty()) {
            $this->db->query("INSERT INTO zoom_oauth(provider, provider_value) VALUES('zoom', '$token')");
        } else {
            $this->db->query("UPDATE zoom_oauth SET provider_value = '$token' WHERE provider = 'zoom'");
            print_r($this->db->last_query());die;
        }
    }
}