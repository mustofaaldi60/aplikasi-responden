<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lagu;
use App\Http\Requests\StoreLaguRequest;
use App\Http\Requests\UpdateLaguRequest;
use Illuminate\Support\Facades\Storage;
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
        return view('admin.lagu.index', [
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
        return view('admin.lagu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaguRequest $request)
    {
        $validate = $this->validate($request,[
            'title' => ['required', 'max:255', 'string'],
            'artis' => ['required', 'max:255', 'string'],
            'genre' => ['required', 'max:255', 'string'],
            'album' => ['required', 'max:255', 'string'],
            'audio' => ['required', 'mimes:mp3,flac,wav,webm'],
            'cover' => ['required', 'mimes:png,jpg,jpeg'],
        ]);

        $validate['audio'] == $request->file('audio') ? $validate['audio'] = $request->file('audio')->store('audios') : null;
        $validate['cover'] == $request->file('cover') ? $validate['cover'] = $request->file('cover')->store('images') : null;

        Lagu::create($validate);

        return redirect('/lagu')->with('success', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function show(Lagu $lagu)
    {
        return view('admin.lagu.show', [
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
        return view('admin.lagu.edit', [
            'lagu' => $lagu
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaguRequest $request, Lagu $lagu)
    {
        $rules = [
            'title' => ['required', 'max:255', 'string'],
            'artis' => ['required', 'max:255', 'string'],
            'genre' => ['required', 'max:255', 'string'],
            'album' => ['required', 'max:255', 'string'],
            'audio' => ['required', 'mimes:mp3,flac,wav,webm'],
            'cover' => ['required', 'mimes:png,jpg,jpeg'],
        ];

        $validate = $request->validate($rules);

        if($request->file('audio')){
            if($request->oldAudio){
                Storage::delete([$request->oldAudio]);
            }

            $validate['audio'] = $request->file('audio')->store('audios');
        }
        if($request->file('cover')){
            if($request->oldImage){
                Storage::delete([$request->oldImage]);
            }

            $validate['cover'] = $request->file('cover')->store('images');
        }

        Lagu::where('id', $lagu->id)->update($validate);

        return redirect('/lagu')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lagu  $lagu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lagu $lagu)
    {
        Lagu::destroy($lagu->id);

        $lagu->audio ? Storage::delete([$lagu->audio]) : Lagu::destroy($lagu->id);
        $lagu->cover ? Storage::delete([$lagu->cover]) : Lagu::destroy($lagu->id);

        if($lagu->cover){
            Storage::delete([$lagu->cover]);
        }

        return redirect('/lagu')->with('success', 'Deleted Successfully!');
    }
}