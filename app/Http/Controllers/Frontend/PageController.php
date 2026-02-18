<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home()
    {
        return view('Frontend.home');
    }
    public function clientRequest(Request $request)
    {
        $request->validate([
            'client_name' => 'required|max:20',
            'shop_name' => 'required|max:50',
            'contact' => 'required|integer|max:10',
            'email' => 'required|unique',
            'address' => 'required',
            'password' => 'required',
        ]);


        $client = new Client();
        $client->client_name = $request->client_name;
        $client->shop_name = $request->shop_name;
        $client->contact = $request->contact;
        $client->email = $request->email;
        $client->password = $request->password;
        $client->address = $request->address;
        $client->logo = $request->logo;
        $client->expiry_date = $request->expiry_date;
        $client->save();
    }
}
