<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        // Output the contents od the $products variable
        //    dd($products); // dd // dump and die

        return view('products.index', [
            'products' => Products::orderBy('created_at')->paginate(3)
        ]);
    }

    // function to add products to the database
    public function create()
    {
        return view('products.create');
    }

    // function to save products to the database
    public function store(SaveProductRequest $request)
    {
        // Alternative to create new objects certain properties and calling the save method like below
        $product = Products::create($request->validated());

        return redirect()->route('products.show', $product)->with('status', 'Product created!');
    }

    // function to show the products
    public function show(Products $product)
    {
        // dd($id);

        // show error status when id is not found from the url database
        // $product =  Products::findOrFail($id);


        return view('products.show', ['product' => $product]); //Alternative to pass data array where index is the name of the variable can also be used with this function compact('product')
    }

    // edit product function
    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    //function to update the product
    public function update(SaveProductRequest $request, Products $product)
    {
        $product->update($request->validated());

        return redirect()->route('products.show', $product)->with('status', 'Product updated!');
    }

    // function to delete a product
    public function destroy(Products $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('status', 'Product deleted!');
    }
}
