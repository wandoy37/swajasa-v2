<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home page
    public function home()
    {
        return view('home.index');
    }

    // service page
    public function service()
    {
        return view('home.services');
    }

    // about page
    public function about()
    {
        return view('home.about');
    }

    //contact page
    public function contact()
    {
        return view('home.contact');
    }

    // action send create
    public function messageStore(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'pesan' => $request->pesan,
            'status' => 'warning',
        ];
        Message::create($data);
        $alert = 'Terimakasih, ' . $request->name . '!!';
        return redirect('/success')->with('success', $alert);
    }
}
