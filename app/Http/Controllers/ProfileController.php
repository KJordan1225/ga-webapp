<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createProfile()
    {
        $pageTitle = "Create Directory Profile";
        $breadCrumbs = "profiles/create";
        return view('profiles.create',compact('pageTitle', 'breadCrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'street1' => 'nullable',
            'street2' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'zip_code' => 'nullable',
            'telephone' => 'nullable',
            'telephone_type' => 'nullable',
            'email' => 'required|email|unique:users',
            'dob' => 'date',
            'queversary' => 'date', 
            'user_id' => 'required|unique:users',           
        ]);
        
        $profile = new Profile();
        $profile->firstname = $validatedData['firstname'];
        $profile->lastname = $validatedData['lastname'];
        $profile->street1 = $validatedData['street1'];
        $profile->street2 = $validatedData['street2'];
        $profile->city = $validatedData['city'];
        $profile->state = $validatedData['state'];
        $profile->zip_code = $validatedData['zip_code'];
        $profile->telephone = $validatedData['telephone'];
        $profile->telephone_type = $validatedData['telephone_type'];
        $profile->email = $validatedData['email'];
        $profile->dob = date('Y-m-d H:i:s');
        $profile->queversary = date('Y-m-d H:i:s');
        $profile->user_id = Auth::id();
        $profile->save();
        
        // Redirect or return response
        
        $pageTitle = "Create Directory Profile";
        $breadCrumbs = "profiles/create";
        return redirect()->back()->with('success', 'Profile created successfully!')
                                    ->with('pageTitle', $pageTitle)
                                    ->with('breadCrumbs', $breadCrumbs);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
