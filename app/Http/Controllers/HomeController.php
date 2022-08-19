<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Config;
use App\Models\Contact;
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
        // app
        $configs = Config::find(1);
        // contacts
        $contacts = Contact::find(1);
        // end configs website

        $services = Service::all();
        return view('home.index', compact('configs', 'contacts', 'services'));
    }

    // service page
    public function service()
    {
        // configs website
        // app
        $configs = Config::find(1);
        // contacts
        $contacts = Contact::find(1);
        // end configs website
        // show services
        $services = Service::query()->where('status', 'publish')->get();
        return view('home.services', compact('configs', 'contacts', 'services'));
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
        // app
        $configs = Config::find(1);
        // contacts
        $contacts = Contact::find(1);
        // end configs website
        // Show data about
        $abouts = About::find(1);
        return view('home.about', compact('configs', 'contacts', 'abouts'));
    }

    //contact page
    public function contact()
    {
        // configs website
        // app
        $configs = Config::find(1);
        // contacts
        $contacts = Contact::find(1);
        // end configs website
        return view('home.contact', compact('configs', 'contacts'));
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
