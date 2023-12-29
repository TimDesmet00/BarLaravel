<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bar;

class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view ('bar.index', ['bars' => Bar::all()]);
    }

    public function contact()
    {
                return view ('/bar/contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view ('bar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        this->validate($request, [
            'nom' => 'required' & 'max:255',
            'adresse' => 'required' & 'max:255',
            'ville' => 'required' & 'max:255',
            'description' => 'required',
            'note' => 'required' & 'min:0' & 'max:5',
        ]);

        $bar = new Bar;

        $bar->nom = $request->nom;
        $bar->adresse = $request->adresse;
        $bar->ville = $request->ville;
        $bar->description = $request->description;
        $bar->note = $request->note;

        $bar->save();

        return redirect()->route('bar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('bar.show', ['bar' => Bar::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            return view ('bar.edit', ['bar' => Bar::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nom' => 'required|max:255',
            'adresse' => 'required|max:255',
            'ville' => 'required|max:255',
            'description' => 'required',
            'note' => 'required|min:0|max:5',
        ]);

        $bar = Bar::find($id);

        $bar->nom = $request->nom;
        $bar->adresse = $request->adresse;
        $bar->ville = $request->ville;
        $bar->description = $request->description;
        $bar->note = $request->note;

        $bar->save();

        return redirect()->route('bar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Bar::destroy($id);

        return redirect()->route('bar.index');
    }
}
