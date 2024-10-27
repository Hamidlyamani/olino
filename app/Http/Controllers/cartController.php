<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\client;
use App\Models\Product;

use Illuminate\Http\Request;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->session()->has('product_info') && empty($request->session()->get('product_info'))) {
            dd($request->session()->get('product_info'));
            $productInfo = $request->session()->get('product_info');
            $request->session()->get('product_info');

            $productId = $productInfo->product_id;
            $product = Product::find($productId);
            if (!$product) {
                return redirect()->route('shop')->with('error',$productId);

            }
            $datatoinsert = new \stdClass();
            $datatoinsert->product_idsave = $productId;
            $datatoinsert->quantity = $productInfo->quantity;

            $cartItem = Cart::where('product_id', $productId)
                ->where('id_client', auth()->id())
                ->first();

            if ($cartItem) {
                // Product is already in the cart, so update the quantity
                $cartItem->update(['quantity' => $cartItem->quantity + $productInfo->quantity]);
            } else {
                $this->saveincarttable($datatoinsert);
                session()->forget('product_info');
            }
        }

        // // Retrieve cart items from the database
        $cartItems = Cart::where('id_client', auth()->id())
            ->with('product', 'client')->get();

        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->product['price'];
        }
        // $user = 0;
// Client::where('id_client', auth()->id())->get();

        // return view('cart');
        return view('cart', ['cartItems' => $cartItems,'total'=>$total]);
 }

    // ,'total'=>$total 'myid'=>$user
    public function addToCart(Request $request)
    {
        $productId = $request->input('id_prodact');
        $quantity = $request->input('quantity');
        $color = $request->input('color');
        $product = Product::find($productId);
        if (!$product) {
            return redirect()->route('/shop')->with('error', 'Product not found.');
        }
        // Checking if this product is already in the user's shopping cart

        $cart = new \stdClass();
        $cart->product_idsave = $request->input('id_prodact');
        $cart->quantity = $quantity;

        $cartItem = Cart::where('product_id', $productId)
            ->where('id_client', auth()->id())
            ->first();

        if ($cartItem) {
            // Product is already in the cart, so update the quantity
            $cartItem->update(['quantity' => $cartItem->quantity + $quantity]);
        } else {
            $this->saveincarttable($cart);}
        return redirect()->route('cart')->with('success', 'Product added to cart.');
    }
    public function removeFromCart(Request $request, $id)
    {
        // Remove the product from the cart in the database
        $var = cart::destroy($id);

        return response()->json(['data' => $var]);
        // return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }

    public function saveincarttable($data)
    {
        $cart = Cart::create([
            'id_client' => auth()->id(), // Adjust this based on your authentication setup
            'product_id' => $data->product_idsave,
            'quantity' => $data->quantity, // You can modify this based on your requirements
        ]);
    }
}