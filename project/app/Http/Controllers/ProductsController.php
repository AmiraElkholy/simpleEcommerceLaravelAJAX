<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{

    public function index() {
        $products = Product::notdeleted()->get();
        return view('products.index', compact('products'));
    }

    public function show($id) {
        $product = Product::notdeleted()->find($id);
        return view('products.show', compact('product'));
    }

    public function create() {
        $categories = Category::notdeleted()->get();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request) {
        $product = new Product;
        $product->name = request('name');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->description = request('description');
        $product->image = $request->image->store('public');
        $product->category_id = request('category_id');
        $product->save();
        return redirect('/products');
    }

    public function edit($id) {
        $product = Product::notdeleted()->find($id);
        $categories = Category::notdeleted()->get();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id) {
        $product = Product::notdeleted()->find($id);
        $product->name = request('name');
        $product->price = request('price');
        $product->quantity = request('quantity');
        $product->description = request('description');
        $product->category_id = request('category_id');
        $product->save();
        return redirect('/products/manage');
    }

    public function destroy($id) {
        $product = Product::notdeleted()->find($id);
        $product->isdeleted = true; //soft delete
        $product->save();
        return redirect('/products/manage');
    }

    public function manage() {
        $products = Product::notdeleted()->get();
        // Product::deleted()->get();
        return view('products.manage',compact('products'));
    }

    public function addProductService() {
        $product = Product::create(request(['name','price','quantity','image', 'description', 'category_id']));
        $product->category_name = Category::notdeleted()->find($product->category_id)->name;
        return $product;
    }

    public function getProductService($id) {
        $product = Product::notdeleted()->find($id);
        $product->category_name = Category::notdeleted()->find($product->category_id)->name;
        return $product;
    }
}
