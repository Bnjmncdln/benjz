<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    function __construct() {
        $this->products = new products();
    }

    public function index(){
        return view('home')->with(["products"=>Products::all()]);
    }

    public function save_products(Request $request){
        $data = [
            'productName' => $request->productName,
            'description' => $request->description,
            'price' => $request->price,
            'quantityinstock' => $request->quantityinstock,
        ];
        $this->products->saveProducts($data);
        return back();
    }
}
