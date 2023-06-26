<?php

namespace App\Http\Controllers;


use App\Models\Offre;
use App\Models\Centre;
use App\Models\Encadrant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function certificat()
    {
        $offres = Offre::where('type', 'F.C.Q')->get();
        return view('certification',compact('offres'));
    }
    public function details($id){
        $offre = Offre::where('id', $id)->where('type', 'F.C.Q')->firstOrFail();
        return view('certificat-details', compact('offre'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {
        $offres=Offre::all();
        $centre=Centre::all();
        $encadrant=Encadrant::all();
        return view('admin.Offre.add',compact('offres','centre','encadrant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom'=>'required',
            'type'=>'required',
            'Compétences_visées'=>'required',
            'Objectifs_formation'=>'required',
            'Public_cible'=>'required',
            'frais_dossier'=>'required',
            'cout_formation'=>'required',
            'lieu_formation'=>'required',
            'duree_formation'=>'required',
            'deroulement_formation'=>'required',
            'selection_candidats'=>'required',
            'evaluation'=>'required',
            'diplome_delivre'=>'required',
            'encadrant_id'=>'required',
            'centre_id'=>'required',
        ]);
           // check if the input nom contains "master" or "licence"
           $offer = Offre::create($validatedData);
    
           $redirectRoute = null;
           if (stripos($offer->nom, 'master') !== false) {
               $redirectRoute = route('master');
           } elseif (stripos($offer->nom, 'licence') !== false) {
               $redirectRoute = route('licence');
           }
           
           return redirect($redirectRoute ? $redirectRoute : route('pagenotfound'));
       
    }
						
   			
    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $offres = Offre::find($id);
    return view('admin.Offre.edit', ['offres' => $offres]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $offres = Offre::find($id);
        $offres->update($request->all());
        return redirect(route('offre.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $offre = Offre::find($id);
        $offre->delete();
        return redirect()->back();
    }
//     public function participate(Request $request, Offre $offre)
// {
//     // Ensure the user is authenticated before participating
//     if (Auth::check()) {
//         $user = Auth::user();

//         // Attach the participation to the user
//         $user->participations()->attach($offre);

//         // Redirect the user with a success message
    
//         alert('Congratulations! You have joined the formation.');
//         return redirect()->back()->with('success', 'Congratulations! You have joined the formation.');
//     }

//     // Redirect the user to the login page if not authenticated
//     return redirect()->route('login');
// }
public function participate(Request $request, Offre $offre)
{
    // Ensure the user is authenticated before participating
    if (Auth::check()) {
        $user = Auth::user();

        // Attach the participation to the user
        $user->participations()->attach($offre);

        // Store the success message in the session
        $request->session()->flash('success', 'Congratulations! You have joined the formation.');

        // Redirect the user back to the previous page
        // return redirect()->back();
        return view('flash');
    } else {
        // If the user is not authenticated, you can handle it accordingly
        // For example, you can redirect them to the login page or display an error message
        return redirect()->route('login')->with('error', 'Please log in to participate.');
    }
}

public function showParticipants(Offre $offre)
{
    // Retrieve the participants for the offer
    $participants = $offre->participants;

    return view('admin.participants', compact('offre', 'participants'));
}



}
