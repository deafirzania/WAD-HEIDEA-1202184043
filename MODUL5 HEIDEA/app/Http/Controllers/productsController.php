<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productsController extends Controller
{
    public function index()
    {
        $product = products::all();

        return view('products', ['products' => $product]);
    }

    public function add()
    {
        return view('/addproducts');
    }
    public function adds(Request $request)
    {

        $product = new products;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->Description;
        $product->stock = $request->stock;

        $img = $request->file('img');

        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'img_product';
            $img->move($upload, $names);
            $product->img_path = $names;
        }

        $product->save();
        return redirect('/products');
    }

    public function delete($id)
    {
        $delte = products::find($id);
        $delte->delete();

        return redirect('/products');
    }

    public function update($id)
    {

        $product = products::find($id)->first();
        return view('updateproduct', ['products' => $product]);
    }

    public function updates($id, Request $request)
    {

        $product = products::find($id)->first();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->Description;
        $product->stock = $request->stock;
        $img = $request->file('img');

        if ($img != null) {
            $names = time() . "_" . $img->getClientOriginalName();
            $upload = 'img_product';
            $img->move($upload, $names);
            $product->img_path = $names;
        }

        $product->save();
        $product = products::all();

        return view('products', ['products' => $product]);
    }
}
