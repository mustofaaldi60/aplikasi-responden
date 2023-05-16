<?php

namespace App\Http\Controllers\Admin;

use App\Models\RequestLagu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestLaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.request-lagu.index', [
            'lagus' => RequestLagu::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.request-lagu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required', 'string'],
            'artis' => ['required', 'string'],
            'genre' => ['required', 'string'],
            'album' => ['required', 'string'],
            'guest_name' => ['required', 'string', 'min:8'],
        ]);

        RequestLagu::create($validate);

        return redirect('/request-lagu')->with('success', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function show(RequestLagu $requestLagu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestLagu $requestLagu)
    {
        return view('admin.request-lagu.edit', [
            'lagus' => $requestLagu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestLagu $requestLagu)
    {
        $rules = [
            'title' => ['required', 'string'],
            'artis' => ['required', 'string'],
            'genre' => ['required', 'string'],
            'album' => ['required', 'string'],
            'guest_name' => ['required', 'string', 'min:8']
        ];

        $request->title == $requestLagu->title ? $rules['title'] : null;
        $request->artis == $requestLagu->artis ? $rules['artis'] : null;
        $request->genre == $requestLagu->genre ? $rules['genre'] : null;
        $request->album == $requestLagu->album ? $rules['album'] : null;

        $validate = $request->validate($rules);

        RequestLagu::where('id', $requestLagu->id)->update($validate);

        return redirect('/request-lagu')->with('success', 'Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestLagu  $requestLagu
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestLagu $requestLagu)
    {
        RequestLagu::destroy($requestLagu->id);

        return redirect('/request-lagu')->with('success', 'Deleted Successfully!');
    }
}
