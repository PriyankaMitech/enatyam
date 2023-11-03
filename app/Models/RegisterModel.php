<?php 

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{
    protected $table = 'register'; // Change to your actual table name
    protected $allowedFields = ['full_name', 'email', 'password', 'is_instructor'];
}
