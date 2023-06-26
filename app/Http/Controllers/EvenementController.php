<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Centre;
use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    
        $events = Evenement::paginate(4);
        // $events=Evenement::paginate(4);
        return view('admin.Evenement.index',compact('events'));
    }
    public function welcome()
    {
        $startOfWeek = now()->startOfWeek();
        $endOfWeek = now()->endOfWeek();

        $events = Evenement::where('date', '<', $startOfWeek)->paginate(4);
        // $events = Evenement::where('date', '<',  Carbon::now())->paginate(4);
        return view('welcome', compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users =User::all();
        $centres =Centre::all();
        return view('admin.Evenement.add',compact('users','centres'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'date' => 'required',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'user_id' => 'required|string',
             'centre_id' => 'required|string',
        ]);
    
       



        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

 
        Evenement::create([
            'nom'=>$validatedData['nom'],
            'date'=>$validatedData['date'],
            'description'=>$validatedData['description'],
            'image' => $imageName,
            'user_id'=>$validatedData['user_id'],
            'centre_id'=>$validatedData['centre_id'],
        ]);
    
        return redirect()->route('evenements.index')->with('success', 'Event created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = Evenement::findOrFail($id);
        $users = User::all();
        $centres = Centre::all();
        return view('admin.Evenement.edit', compact('event', 'users', 'centres'));
    }
    /**
     * Update the specified resource in storage.
     */
/**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'nom' => 'required|string',
        'date' => 'required',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'user_id' => 'required',
        'centre_id' => 'required',
    ]);
    
    $event = Evenement::findOrFail($id);

    // Update the event with the validated data
    $event->update([
        'nom' => $validatedData['nom'],
        'date' => $validatedData['date'],
        'description' => $validatedData['description'],
        'user_id' => $validatedData['user_id'],
        'centre_id' => $validatedData['centre_id'],
    ]);


    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $event->image = $imageName;
        $event->save();
    }
    

    return redirect()->route('evenements.index')->with('success', 'Event updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {  
       $evenement->delete();
       return redirect(route('evenements.index'));
    }
}
