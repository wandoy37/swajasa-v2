<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $service = Service::query()->latest()->paginate(5);

        $service = Service::query()->latest();
        // Search service berdasarkan title
        if (request('search')) {
            $service->where('title', 'LIKE', '%' . request('search') . '%');
        }
        $search = request('search') ?? '';

        $service = $service->paginate(5);
        $count = Service::count();
        return view('admin.service.index', compact('service', 'search', 'count'));
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
            $data['icon'] = $request->file('icon')->store('icon-service', ['disk' => 'public_uploads']);
        }
        if ($request->file('sampul')) {
            $data['sampul'] = $request->file('sampul')->store('sampul-service', ['disk' => 'public_uploads']);
        }

        // ddd($data);
        $service = Service::create($data);
        $alert = 'New service' . $request->title . 'Has been added!';
        return redirect('admin/service')->with('success', $alert);
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
                $destinationPath = 'uploads/';
                File::delete($destinationPath . $request->oldIcon);
            }
            $data['icon'] = $request->file('icon')->store('icon-service', ['disk' => 'public_uploads']);
        }

        // Sampul
        if ($request->file('sampul')) {
            if ($request->oldSampul) {
                $destinationPath = 'uploads/';
                File::delete($destinationPath . $request->oldSampul);
            }
            $data['sampul'] = $request->file('sampul')->store('sampul-service', ['disk' => 'public_uploads']);
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
    public function destroy(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->first();
        if ($service->icon) {
            $destinationPath = 'uploads/';
            File::delete($destinationPath . $service->icon);
        }
        if ($service->sampul) {
            $destinationPath = 'uploads/';
            File::delete($destinationPath . $service->sampul);
        }

        $service->delete($service);
        return redirect('admin/service')->with('success', 'Berhasil menghapus layanan');
    }
}
