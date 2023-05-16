<?php

namespace App\Http\Controllers\Admin;

use App\Models\Acara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Siaran;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.acara.index', [
            'acaras' => Acara::latest()->with('siaran')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.acara.create',[
            'siarans' => Siaran::all()
        ]);
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
            'nama' => ['required','min:4','max:255','string'],
            'slug' => ['required','string','unique:acaras'],
            'jenis' => ['required','min:4','max:255','string'],
            'penyiar' => ['required','min:4','max:255','string'],
            'hari' => ['required','string'],
            'jam' => ['required','string'],
            'siaran_id' => ['required'],
        ]);

        Acara::create($validate);

        return redirect('/acara')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function show(Acara $acara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function edit(Acara $acara)
    {
        return view('admin.acara.edit',[
            'acaras' => $acara,
            'siarans' => Siaran::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acara $acara)
    {
        $rules = [
            'nama' => ['required','min:4','max:255','string'],
            'jenis' => ['required','min:4','max:255','string'],
            'penyiar' => ['required','min:4','max:255','string'],
            'hari' => ['required','string'],
            'jam' => ['required','string'],
            'siaran_id' => ['required'],
        ];

        $request['slug'] == $acara['slug'] ? $rules['slug'] = ['required','string'] : $rules['slug'] = ['required','string','unique:acaras'] ;

        $validate = $request->validate($rules);

        Acara::where('id',$acara->id)->update($validate);

        return redirect('/acara')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acara  $acara
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acara $acara)
    {
        Acara::destroy($acara->id);

        return redirect('/acara')->with('success','Deleted Successfully!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Acara::class, 'slug', $request->nama);

        return response()->json(['slug' => $slug]);
    }
}
