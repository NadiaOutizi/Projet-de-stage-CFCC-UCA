<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ActualiteController extends Controller
{
    public function index(){
        $user = auth()->user();
        $events = Evenement::where('date', '>', Carbon::now())->get();
        // $events = Evenement::all();
        return view('actualite',[
            'authUser' => $user,
            'events' => $events,
        ]);
    }
}
