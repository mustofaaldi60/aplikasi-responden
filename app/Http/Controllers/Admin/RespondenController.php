<?php

namespace App\Http\Controllers\Admin;

use App\Models\Responden;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RespondenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.responden.index', [
            'respondens' => Responden::latest()->with('acara')->paginate(10)
        ]);
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
     * @param  \App\Models\Responden  $responden
     * @return \Illuminate\Http\Response
     */
    public function show(Responden $responden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responden  $responden
     * @return \Illuminate\Http\Response
     */
    public function edit(Responden $responden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Responden  $responden
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responden $responden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responden  $responden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responden $responden)
    {
        Responden::destroy($responden->id);

        return redirect('/responden')->with('success','Deleted Successfully!');
    }

    public function cetakAll()
    {
        return view('admin.responden.cetak',[
            'respondens' => Responden::all()
        ]);
    }
}
