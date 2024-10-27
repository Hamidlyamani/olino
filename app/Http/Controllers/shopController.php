<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class shopController extends Controller
{
 public function index(){
       $products= product::all();
                $products= product::latest()->paginate(8);
//  $products= product::latest()->take(8)->get();
    return view('shop',compact('products'));
 }

 public function getProduct(Request $request){
        $product = Product::find($request->id);
       
        return view('detailPro', compact('product'));
 }
 public function inseret(){
   $data = array([
       ]);

     product::insert($data);

        return "Data inserted successfully.";
 }
}
