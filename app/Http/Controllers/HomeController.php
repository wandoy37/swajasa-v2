<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Message;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home page
    public function home()
    {
        // configs website
        $configs = Config::find(1);
        $services = Service::all();
        return view('home.index', compact('configs', 'services'));
    }

    // service page
    public function service()
    {
        // configs website
        $configs = Config::find(1);
        // show services
        $services = Service::query()->where('status', 'publish')->get();
        return view('home.services', compact('configs', 'services'));
    }

    // Service details page
    public function service_show($slug)
    {
        $service = Service::query()->where('slug', $slug)->first();
        $configs = Config::find(1);
        return view('home.service.details', compact('service', 'configs'));
    }

    // about page
    public function about()
    {
        // configs website
        $configs = Config::find(1);
        return view('home.about', compact('configs'));
    }

    //contact page
    public function contact()
    {
        // configs website
        $configs = Config::find(1);
        return view('home.contact', compact('configs'));
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
