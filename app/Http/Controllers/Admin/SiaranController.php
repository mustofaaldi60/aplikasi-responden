<?php

namespace App\Http\Controllers\Admin;

use App\Models\Siaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SiaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.siaran.index', [
            'siarans' => Siaran::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siaran.create');
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
            'nama' => ['required','string'],
            'slug' => ['required','string','unique:siarans'],
            'frekuensi' => ['required','string']
        ]);

        Siaran::create($validate);

        return redirect('/siaran')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function show(Siaran $siaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Siaran $siaran)
    {
        return view('admin.siaran.edit',[
            'siarans' => $siaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siaran $siaran)
    {
        $rules = [
            'nama' => ['required','string','min:4','max:255'],
            'frekuensi' => ['required','string','min:4','max:255'],
        ];

        $request['slug'] == $siaran['slug'] ? $rules['slug'] = ['required','string'] : $rules['slug'] = ['required','string','unique:siarans'] ;

        $validate = $request->validate($rules);

        Siaran::where('id',$siaran->id)->update($validate);

        return redirect('/siaran')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siaran  $siaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siaran $siaran)
    {
        Siaran::destroy($siaran->id);

        return redirect('/siaran')->with('success','Deleted Successfully!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Siaran::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }
}
