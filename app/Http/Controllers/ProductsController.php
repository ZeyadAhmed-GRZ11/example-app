<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index() {
        $data = Product::all();
        return response()->json(['data' => $data]);
    }

    public function store(Request $req) {
        $data = $req->all();
        $newProd = Product::create($data);

        return response()->json(['data' => $newProd]);
    }

    public function update(Request $req , $id) {
        $data = $req->all();
        $product = Product::findOrFail($id);
        $product['price'] = $data['price'];
        $product['name'] = $data['name'];
        $product->save();

        return response()->json(['data' => $product]);
    }

    public function del(Request $req , $id) {
        $data = $req->all();
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['data' => 'deleted']);
    }
}
