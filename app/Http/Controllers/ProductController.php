<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $products;

    public function index()
    {
        return view('admin.product.add');
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('message','Product added successfully');
    }

    public function manage()
    {
        $this->products = Product::orderBy('id','desc')->get();
        return view('admin.product.manage',['products' => $this->products]);
    }

    public function edit($id)
    {
        return view('admin.product.edit');
    }

    public function update($id)
    {
        return view('admin.product.add');
    }

    public function delete($id)
    {
        return view('admin.product.add');
    }

    public function updateStatus($id)
    {
        $this->product = Product::updateProductStatus($id);
        return redirect()->back()->with('message',$this->product);
    }
}
