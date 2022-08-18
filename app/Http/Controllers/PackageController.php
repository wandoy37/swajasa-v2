<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::query()->latest();
        // Search package berdasarkan title
        if (request('search')) {
            $packages->where('title', 'LIKE', '%' . request('search') . '%');
        }

        $packages = $packages->paginate(5);
        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        $benefits = Benefit::select('id', 'title')->get();
        // dd($benefits);
        return view('admin.package.create', compact('services', 'benefits'));
    }

    public function select(Request $request)
    {
        $benefits = [];
        if ($request->has('q')) {
            $benefits = Benefit::select('id', 'title')->search($request->q)->get();
        } else {
            $benefits = Benefit::select('id', 'title')->get();
        }


        return response()->json($benefits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|unique:packages',
                'price' => 'required',
                'service' => 'required',
                'benefit' => 'required',
            ],
            [],
        );
        // kondisi jika validasi gagal dilewati.
        if ($validator->fails()) {
            if ($request['benefit']) {
                $request['benefit'] = Benefit::select('id', 'title')->whereIn('id', $request->benefit)->get();
            }
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        // Jika lolos validasi jalankan method push/insert data
        DB::beginTransaction();
        try {

            $package = Package::create([
                'title' => $request->title,
                'slug' => Str::slug($request->title, '-'),
                'price' => $request->price,
                'service_id' => $request->service,
                'discount' => $request->discount,
            ]);
            // Jika terdapat nilai pada discount maka push/insert datanya
            $package->benefits()->attach($request->benefit);
            return redirect('/admin/package')->with('success', 'Package has been added!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/admin/package')->with('error', 'Package gagal ditambahkan!');
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $package = Package::where('slug', $slug)->first();
        $services = Service::all();
        $benefits = Benefit::select('id', 'title')->get();
        return view('admin.package.edit', compact('package', 'services', 'benefits'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $package = Package::find($id);
        // validasi
        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|string|unique:packages,title,' . $package->id,
                'price' => 'required',
                'service' => 'required',
                'benefit' => 'required',
            ],
            [],
        );
        // kondisi jika validasi gagal dilewati.
        if ($validator->fails()) {
            if ($request['benefit']) {
                $request['benefit'] = Benefit::select('id', 'title')->whereIn('id', $request->benefit)->get();
            }
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }

        // Jika lolos validasi jalankan method push/insert data
        DB::beginTransaction();
        try {

            $package->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title, '-'),
                'price' => $request->price,
                'service_id' => $request->service,
                'discount' => $request->discount,
            ]);
            // Jika terdapat nilai pada discount maka push/insert datanya
            $package->benefits()->sync($request->benefit);
            return redirect('/admin/package')->with('success', 'Package has been updated!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/admin/package')->with('error', 'Package gagal update!');
        } finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete($package);
        return redirect('admin/package')->with('success', 'Berhasil menghapus package');
    }
}
