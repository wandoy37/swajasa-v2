<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configs = Config::find(1);
        return view('admin.config.index', compact('configs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        $configs = Config::find(1);

        $data = [
            'title' => $request->title,
            'brand_name' => $request->brand_name,
            'description' => $request->description,
            'about' => $request->about,
            'benefit' => $request->benefit,
            'map' => $request->map,
        ];
        // Brand Icon
        if ($request->file('brand_icon')) {
            if ($request->oldBrandIcon) {
                $destinationPath = 'uploads/';
                File::delete($destinationPath . $request->oldBrandIcon);
            }
            $data['brand_icon'] = $request->file('brand_icon')->store('app', ['disk' => 'public_uploads']);
        }

        $configs->update($data);
        $alert = 'Configs App has been updated!';
        return redirect('admin/configs')->with('success', $alert);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        //
    }
}
