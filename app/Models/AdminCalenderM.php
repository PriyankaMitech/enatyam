<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminCalenderM extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'start_date', 'end_date'];
}