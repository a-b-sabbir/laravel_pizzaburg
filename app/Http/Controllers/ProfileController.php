<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profile/create');
    }

    public function store()
    {
        // Create a new User object (or whatever model you're using)
        $users = new profile();
        $users->name = request('name');
        $users->email = request('email');

        // Handle file upload for profile picture
        if (request()->hasFile('profile_picture')) {
            // Save the uploaded file to 'public/profile_pictures' and store its path
            $profilePicturePath = request()->file('profile_picture')->store('profile_pictures', 'public');
            $users->profile_picture = $profilePicturePath; // Save the path in the database
        }

        // Save the user (or whatever model you’re using) to the database
        $users->save();

        // Optionally return a success message
        return redirect('/profile');
    }
    public function index(){
        $profile = profile::orderBy('id', 'desc')->paginate(5);
        return view('profile.index', ['profile' => $profile]);
    }
}
