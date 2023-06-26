<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use Illuminate\Http\Request;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centres=Centre::paginate(4);
        return view('admin.Centre.index',compact('centres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centres=Centre::all();
        return view('admin.Centre.add',compact('centres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nom'=>'required',
            'adress'=>'required',
        ]);
        Centre::create($validatedData);
        return redirect(route('centre.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Centre $centre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $centre = Centre::find($id);
    return view('admin.Centre.edit', ['centre' => $centre]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $centre = Centre::find($id);
        $centre->update($request->all());
        return redirect(route('centre.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centre $Centre)
    {
        $Centre->delete();
       return redirect(route("centre.index"));
    }
}
