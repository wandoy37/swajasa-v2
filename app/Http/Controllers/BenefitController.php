<?php

namespace App\Http\Controllers;

use App\Http\Requests\BenefitRequest;
use App\Models\Benefit;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits = Benefit::query()->latest()->paginate(5);
        return view('admin.benefit.index', compact('benefits'));
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
    public function store(BenefitRequest $request)
    {
        Benefit::create([
            'title' => $request->title
        ]);
        return redirect('/admin/benefit')->with('success', 'Benefit baru berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function show(Benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(BenefitRequest $request, $id)
    {
        $benefit = Benefit::find($id);
        $benefit->update([
            'title' => $request->title
        ]);
        return redirect('/admin/benefit')->with('success', 'Benefit telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefit $benefit, $id)
    {
        $benefit = Benefit::find($id);
        $benefit->delete($benefit);
        return redirect('admin/benefit')->with('success', 'Berhasil menghapus benefit');
    }
}
