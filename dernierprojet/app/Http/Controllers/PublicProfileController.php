<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
     public function show($username)
    {
        $user = \App\Models\User::where('username', $username)->firstOrFail();
        $projects = $user->projects;
        $skills = $user->skills;

        return view('profile.show', compact('user', 'projects', 'skills'));
    }
}