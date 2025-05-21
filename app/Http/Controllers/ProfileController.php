<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'title' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->update($request->only(['name', 'email', 'title', 'bio', 'username']));

        return redirect()->route('profile.edit')->with('success', 'Profil mis à jour.');
    }
}
