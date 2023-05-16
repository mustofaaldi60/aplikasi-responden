<?php

namespace App\Http\Controllers\Home;

use App\Models\Lagu;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.lagu.index',[
            'lagus' => Lagu::latest()->paginate(10)
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
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function show(Lagu $lagu)
    {
        return view('home.lagu.show',[
            'lagu' => $lagu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function edit(Lagu $lagu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lagu $lagu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lagu $lagu)
    {
        //
    }
}