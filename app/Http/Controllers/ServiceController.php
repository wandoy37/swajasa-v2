<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
        ];

        if ($request->file('icon')) {
            $data['icon'] = $request->file('icon')->store('icon-services');
        }
        if ($request->file('sampul')) {
            $data['sampul'] = $request->file('sampul')->store('sampul-services');
        }

        // ddd($data);
        $service = Service::create($data);
        return redirect('admin/service')->with('success', 'Berhasil menambahkan layanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $id)
    {
        $service = Service::find($id);
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'content' => $request->content,
            'status' => $request->status,
        ];

        // Icon
        if ($request->file('icon')) {
            if ($request->oldIcon) {
                Storage::delete($request->oldIcon);
            }
            $data['icon'] = $request->file('icon')->store('icon-services');
        }

        // Sampul
        if ($request->file('sampul')) {
            if ($request->oldSampul) {
                Storage::delete($request->oldSampul);
            }
            $data['sampul'] = $request->file('sampul')->store('sampul-services');
        }


        $service->update($data);
        return redirect('admin/service')->with('success', 'Berhasil update layanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $service = Service::where('slug', $slug)->first();
        if ($service->icon) {
            Storage::delete($service->icon);
        }
        if ($service->sampul) {
            Storage::delete($service->sampul);
        }

        $service->delete($service);
        return redirect('admin/service')->with('success', 'Berhasil menghapus layanan');
    }
}
