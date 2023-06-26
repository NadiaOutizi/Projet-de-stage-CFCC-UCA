<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getOffers(Request $request)
    {
        $lieuFormation = DB::table('offres')
            ->select('lieu_formation')
            ->distinct()
            ->where('nom', 'LIKE', '%Master%')
            ->orderBy('lieu_formation')
            ->get();
           
        $offres = DB::table('offres')
            ->select('id', 'lieu_formation', DB::raw('MAX(created_at) as created_at'))
            ->where('nom', 'LIKE', '%Master%')
            ->groupBy('id', 'lieu_formation', 'nom') // Add 'nom' to the groupBy clause
            ->when($request->input('lieu'), function ($query, $lieu) {
                return $query->where('lieu_formation', $lieu);
            })
            ->orderBy('lieu_formation')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('master', [
            'offres' => $offres,
            'lieuFormation' => $lieuFormation,
        ]);
    }
    
    public function showMoreMaster($lieu)
    {
        $offres = Offre::where('lieu_formation', $lieu)->get();
        return view('ShowMaster', compact('offres'));
    }
  
    public function showOfferMaster($id)
    {
        $offre = Offre::findOrFail($id);
        return view('masterOfferDetails', compact('offre'));
    }
}