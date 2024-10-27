<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\clientRequest;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Registration');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(clientRequest $request)
    {
        $dd = $request->validated();
        $dd['password'] = Hash::make($request->password);
        client::create($dd);
        return redirect()->route('login')->with('message', 'Your account has been successfully created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
  public function edit()
{
    $id_client = auth()->id();
    $client = Client::find($id_client);
    return view('editclient', compact('client'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:clients,email,' . auth()->id(),
        'phone' => 'required',
        'adresse' => 'required',
    ]);
        if (!empty($request->password)) {
        $hashedpass = Hash::make($request->password);
        $validatedData['password'] = $hashedpass;
    }

    $client = client::findOrFail(auth()->id());
    $client->update($validatedData);

    return redirect()->route('cart')->with('message', 'Your account has been successfully updated!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }
}