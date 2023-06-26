<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getOffers(Request $request)
    {
        $lieuFormation = DB::table('offres')
            ->select('lieu_formation')
            ->distinct()
            ->where('nom', 'LIKE', '%Licence%')
            ->orderBy('lieu_formation')
            ->get();
        
            $offres = DB::table('offres')
            ->select('id','lieu_formation', DB::raw('MAX(created_at) as created_at'))
            ->distinct()
            ->where('nom', 'LIKE', '%Licence%')
            ->groupBy('id','lieu_formation')
            ->when($request->input('lieu'), function ($query, $lieu) {
                return $query->where('lieu_formation', $lieu);
            })
            ->orderBy('lieu_formation')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    
        return view('licence', [
            'offres' => $offres,
            'lieuFormation' => $lieuFormation,
        ]);
    }
    
    public function showMoreLicence($lieu)
    {
      $offres = Offre::where('lieu_formation', $lieu)->get();
      return view('ShowLicence', compact('offres'));
    }
  
    public function showOfferLicence($id)
{
    $offre = Offre::findOrFail($id);
    return view('licenceOfferDetails', compact('offre'));
}
}
