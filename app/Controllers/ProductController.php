<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    
        private $product;
        public function __construct()
        {
            $this->product = new \App\Models\ProductModel();
        }
    
        public function delete($id)
        {
            $this->product->delete($id);
            return redirect()->to('/product');
        }
    
        public function edit($id)
        {
            $data = [
                'product' => $this->product->findAll(),
                'pro' => $this->product->where('id', $id)->first(),           
            ];
            return view('products', $data);
        }
        
        public function save()
        {   
            $id =$_POST['id'];
            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'category' => $this->request->getVar('category'),
                'quantity' => $this->request->getVar('quantity'),
                'price' => $this->request->getVar('price'),
            ];
            if($id != null){
               $this->product->set($data)->where('id', $id)->update();
            }
            else{
                 $this->product->save($data);
            }
            return redirect()->to('/product');
        }
    
    
        public function product($product)
        {
            echo $product;
        }
    
        public function montellano()
        {
            $data['product'] = $this->product->findAll();
            return view('products', $data);
        }
    
        public function index()
        {
            //
        }

    
}
