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
            'email' => 'required|email',
            'dob' => 'nullable',
            'queversary' => 'nullable',          
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
        // $profile->email = $validatedData['email'];
        $profile->dob = $validatedData['dob'];
        $profile->queversary = $validatedData['queversary'];
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
    public function edit($myProfileID)
    {
        $pageTitle = "Edit Profile";
        $breadCrumbs = "profiles/edit";
        $myProfile = Profile::findOrFail($myProfileID);
        return view('profiles.edit', compact('pageTitle', 'breadCrumbs', 'myProfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
	{
		$myProfile = Profile::findOrFail($id);
		$myProfile->firstname = $request->input('firstname');
		$myProfile->lastname = $request->input('lastname');
		$myProfile->street1 = $request->input('street1');
		$myProfile->street2 = $request->input('street2');
		$myProfile->city = $request->input('city');
		$myProfile->state = $request->input('state');
		$myProfile->zip_code = $request->input('zip_code');
		$myProfile->telephone = $request->input('telephone');
		$myProfile->telephone_type = $request->input('telephone_type');
		$myProfile->email = $request->input('email');
		$myProfile->dob = $request->input('dob');
		$myProfile->queversary = $request->input('queversary');
		$myProfile->user_id = Auth::id();		
		$myProfile->save();
		
		$pageTitle = "Edit Profile";
        $breadCrumbs = "profiles/edit";
        return redirect()->back()->with('success', 'Profile updated successfully!')
                                    ->with('pageTitle', $pageTitle)
                                    ->with('breadCrumbs', $breadCrumbs)
									->with('myProfile', $myProfile);
	}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function viewSingle($myProfileID)
    {
        $pageTitle = "View Profile";
        $breadCrumbs = "profiles/viewSingle";
        $myProfile = Profile::findOrFail($myProfileID);
        return view('profiles.viewSingle', compact('pageTitle', 'breadCrumbs', 'myProfile'));
    }
}
