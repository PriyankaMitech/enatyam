<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function AddToCart()
    {
        $productModel = new ProductModel();
        if ($this->request->getMethod() === 'post') {
            

            $data = [
               
                'product_name' => $this->request->getPost('product_name'),
                'description' => $this->request->getPost('description'),
                 'price' => $this->request->getPost('price')
            ];
// print_r($data);die;
            $productModel->insert($data);

        
        }

        return view('Checkout'); // Load your view here
    }

     public function showData()
    {
        $model = new ProductModel();
        $data['add_to_cart'] = $model->findAll(); // Fetch all items from the model
        // print_r($data);die;
        return view('cart', $data);
        
    }
    public function removeProduct($cart_id)
    {
        $ProductModel = new ProductModel();

        $product_name = $ProductModel->find($cart_id);

        if ($product_name) {
            $ProductModel->delete($cart_id);
            return redirect()->to('Cart'); // Redirect to the cart page or wherever appropriate
        } else {
            // Handle error, item not found
            // You could show a message or redirect back with an error message
            
        }

       
}

}