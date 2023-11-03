<?php
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'add_to_cart'; // Update with your table name
    protected $primaryKey = 'cart_id'; // Update with your primary key column name
    protected $allowedFields = [ 'product_name', 'description', 'price']; // List of fields you want to allow for insertion

    // Add more custom logic if needed
   
    public function getAllRecords()
    {
        return $this->findAll();
    }
    
}
