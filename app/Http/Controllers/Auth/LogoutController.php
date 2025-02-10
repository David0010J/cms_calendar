<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //
    public function logout(Request $request)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Log the user out
            Auth::logout();

            // Optionally, invalidate the session to prevent session fixation attacks
            $request->session()->invalidate();

            // Regenerate the session token to prevent session fixation attacks
            $request->session()->regenerateToken();
        }

        // Redirect the user to the homepage or login page after logout
        return redirect()->intended('/');  // Or replace with your desired route
    }
}
