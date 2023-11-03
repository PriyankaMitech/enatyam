<?php 
namespace App\Models;

use CodeIgniter\Model;

class SessionModel extends Model
{
    protected $table = 'sessions';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'duration', 'price_per_session', 'total_price',
        'image_path', 'description', 'features'
    ];
}
