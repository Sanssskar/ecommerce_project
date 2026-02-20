<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ClientRequestNotification;
use App\Models\Admin;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends BaseController
{
    public function home()
    {
        return view('Frontend.home');
    }
    public function clientRequest(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'shop_name' => 'required|max:50',
            'contact' => 'required|integer',
            'email' => 'required',
            'address' => 'required',
        ]);


        $client = new Client();
        $client->name = $request->name;
        $client->shop_name = $request->shop_name;
        $client->contact = $request->contact;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->logo = $request->logo;
        $client->save();

        $admin = Admin::first();

        Mail::to($admin)->send(new ClientRequestNotification($client));
        toast('Request sent succesfully','success');
        return redirect()->back();
    }
}
