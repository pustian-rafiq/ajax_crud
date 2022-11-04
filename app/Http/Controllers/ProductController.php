<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function ShowProducts(){
        $products= Product::latest()->paginate(5);
        return view('product.index', compact('products'));
    }

    public function AddProduct(Request $request){

        $validated = $request->validate([
            'product_name' => 'required|unique:products',
            'sell_price' => 'required',
        ],
        [
            'product_name.required' => "Product name must be filled",
            'product_name.unique' => "Product name must be unique",
            'sell_price.required' => "Sell price must be filled",
        ]);

        $data = new Product();

        $data['product_name'] = $request->product_name;
        $data['sell_price'] = $request->sell_price;
        $data['discount_price'] = $request->discount_price;

        $data->save();

        return response()->json([
            'status' => 'success'

        ]);
        // return $request->all();
    }

    // update product data
    public function UpdateProduct(Request $request){

        $validated = $request->validate([
            'product_name' => 'required|unique:products',
            'sell_price' => 'required',
        ],
        [
            'product_name.required' => "Product name must be filled",
            'product_name.unique' => "Product name must be unique",
            'sell_price.required' => "Sell price must be filled",
        ]);

        Product::where('id',$request->product_id)->update([
            'product_name' => $request->product_name,
            'sell_price' => $request->sell_price,
            'discount_price' => $request->discount_price,
        ]);
 

        return response()->json([
            'status' => 'success'

        ]);
        // return $request->all();
    }
}