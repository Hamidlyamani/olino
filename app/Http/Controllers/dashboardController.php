<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class dashboardController extends Controller
{
    public function accueil()
    {

        return view('admin.dashboard');
    }
    public function index(Request $request, $page)
    {
        $data = $this->getPageData($request, $page);
        return $data;
    }

    private function getPageData($request, $component)
    {
        if ($component === 'homeDashboard') {
            if (View::exists("components.$component")) {
                $Orders = $this->getAllorders();
                $html = view("components.$component", compact('Orders'))->render();
                return response()->json(['dataC' => $html]);
            }
            return response()->json(['error' => 'Component not found'], 404);
        } elseif ($component === 'allProducts') {
            if (View::exists("components.$component")) {
                $products = $this->getAllProduct();
                $html = view("components.$component", compact('products'))->render();
                return response()->json(['dataC' => $html]);
            }
            return response()->json(['error' => 'Component not found'], 404);
        } elseif ($component === 'getclients') {

            if (View::exists("components.$component")) {
                $clients = $this->getAllclients();
                $html = view("components.$component", compact('clients'))->render();
                return response()->json(['dataC' => $html]);
            }
            return response()->json(['error' => 'Component not found'], 404);
        } elseif ($component === 'allorders') {
            if (View::exists("components.$component")) {
                $Orders = $this->getAllorders();
                $html = view("components.$component", compact('Orders'))->render();
                return response()->json(['dataC' => $html]);
            }
            return response()->json(['error' => 'Component not found'], 404);
        } elseif ($component === 'addProduct') {
            if (View::exists("components.$component")) {
                // Product::create($request->post());
                $html = view("components.$component")->render();
                return response()->json(['dataC' => $html]);
            }

            return response()->json(['error' => 'Component not found'], 404);
        } elseif ($component === 'insertProduct') {

            try {
                $request->validate([
                    "name" => 'required',
                    "price" => 'required',
                    "description" => "",
                    "image_name" => "required",
                    'status' => '',
                ]);
            } catch (\Illuminate\Validation\ValidationException $e) {
                Log::info($e->validator->errors());
                return back()->withErrors($e->validator)->withInput()->with('error', 'Please correct the errors and try again.');;
              }
            // if ($validator->fails()) {
            //     return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Please correct the errors and try again.');
            // }
            if ($request->hasFile('image_name')) {

                $imageName = time();
                $imageseve = $request->image_name->move(public_path('images'), $imageName);

            }

            // Create a new product record
            $product = Product::create([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'status' => $request->input('status'),
                'description' => $request->input('description'),
                'image_name' => $imageName, 
            ]);

          return redirect('/dashboard')->with('success', 'You have successfully added a product.');

        } else {
            return response()->json(['error' => 'page not found'], 404);
        }
    }

    public function getAllProduct()
    {
        $products = product::all();
        return $products;
    }
    public function getAllclients()
    {
        $clients = client::all();
        return $clients;
    }
    public function getAllorders()
    {
        $cartItems = cart::with('Product', 'client')->get();
        return $cartItems;
    }
    public function removeProduct($idProduct)
    {
        $product = Product::find($idProduct);
        if (!$product) {
            return redirect()->route('dash')->with('error', 'Product not found.');
        }
        $product->delete();
        return redirect('/dashboard')->with('success', 'You have successfully removed a product.');
    }
    public function removClient($idClient)
    {
        $client = client::find($idClient);

        if (!$client) {
            return redirect()->route('dash')->with('error', 'order not found.');
        }

        $client->delete();

        return redirect('/dashboard')->with('success', 'You have successfully removed this client.');
    }
    public function removOrder($idorder)
    {
        $order = cart::find($idorder);

        if (!$order) {
            return redirect()->route('dash')->with('error', 'Order not found.');
        }

        $order->delete();

        return redirect('/dashboard')->with('success', 'You have successfully removed this order.');
    }

}