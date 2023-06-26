<?php

namespace App\Http\Controllers;

use App\Models\Encadrant;
use Illuminate\Http\Request;

class EncadrantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $encadrants=Encadrant::paginate(4);
        return view('admin.Encadrant.index',compact('encadrants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $encadrants=Encadrant::all();
        return view('admin.Encadrant.add',compact('encadrants'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nom'=>'required',
            'email'=>'required|unique:encadrants',
            'Fax'=>'required',
            'telephone'=>'required',
        ]);
        Encadrant::create($validatedData);
        return redirect(route('encadrant.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Encadrant $encadrant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $encadrant = Encadrant::find($id);
        return view('admin.Encadrant.edit', ['encadrant' => $encadrant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $encadrants = Encadrant::find($id);
        $encadrants->update($request->all());
        return redirect(route('encadrant.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Encadrant $encadrant)
    {
     
       $encadrant->delete();
       return redirect(route('encadrant.index'));

    }
}
