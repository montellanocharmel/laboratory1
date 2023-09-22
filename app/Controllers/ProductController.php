<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
        private $category;
        private $product;
        public function __construct()
        {
            $this->product = new \App\Models\ProductModel();
            $this->category = new \App\Models\CategoryModel();
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
                'category' => $this->category->distinct()->findAll(),          
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


        public function cat_delete($cat_id)
        {
            $this->category->delete($cat_id);
            return redirect()->to('/product');
        }
    
        public function cat_edit($cat_id)
        {
            $data = [
                'product' => $this->product->findAll(),
                'cat' => $this->category->where('cat_id', $cat_id)->first(), 
                'category' => $this->category->distinct()->findAll(),          
            ];
            return view('products', $data);
        }
        
        public function cat_save()
        {   
            $cat_id =$_POST['cat_id'];
            $data = [
                'category' => $this->request->getVar('category'),
            ];
            if($cat_id != null){
               $this->category->set($data)->where('cat_id', $cat_id)->update();
            }
            else{
                 $this->category->save($data);
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
            $data['category'] = $this->category->findAll();
            return view('products', $data);
        }
    
        public function index()
        {
            //
        }

    
}
