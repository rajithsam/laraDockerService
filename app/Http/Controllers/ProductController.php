<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    
    public function index()
    {
 
        $products  = Product::all();
 
        return response()->json( $products );
 
    }
 
    public function show($id)
    {
 
        $product  = Product::find($id);
 
        return response()->json($product);
    }
 
    public function save(Request $request)
    {
        $product = Product::insert([
                                        'name'  => $request->input('name'),
                                        'detail'=> $request->input('detail')
                                    ]);
 
        return response()->json($product);
 
    }
    
    public function update(Request $request, $id )
    {
        $product  = Product::find($id);
 
        $product->update([
            'name'   => $request->input('name'),
            'detail' => $request->input('detail')
        ]); 
 
        return response()->json($product);
    }
    
    public function delete($id)
    {
        $product  = Product::find($id);
 
        $product->delete();
 
        return response()->json('success');
    }
}