<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register'); // Make sure you have the 'auth.register' view
    }


    public function store(Request $request)
    {
        $UserData = $request-> validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required','confirmed', Password::min(6)],
        ]);

        $EmployerData = $request-> validate([
            'employer' => ['required'],
            'logo' => ['required', File::types(['png', 'jpg', 'webp'])],
        ]);

        $newUser = User::create($UserData);

        $logoPath = $request->logo->store('logos');

        //to create the employer
        $newUser->employer()->create([
            'name' => $EmployerData['employer'],
            'logo' => $logoPath,
        ]);

        Auth::login($newUser);

        return redirect('/jobs');
    }
}