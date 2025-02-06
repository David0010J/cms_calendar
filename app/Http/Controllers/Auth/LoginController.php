<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('others.authentication.login'); // your login form view
    }

    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'user_name' => 'required|string',
            'password'  => 'required|string|min:6',
        ]);

        // Find the user by user_name (assuming 'user_name' is the column for username)
        $user = User::where('user_name', $request->input('user_name'))->first();

        // Check if the user exists and the password is correct
        if ($user && Hash::check($request->password, $user->password)) {
            // Log in the user
            Auth::login($user);

                                                       // Redirect to the intended page or home
            return redirect()->intended('/dashboard'); // Replace '/home' with your desired redirect
        }

        // If authentication fails, return with an error message
        return back()->withErrors([
            'user_name' => 'Invalid credentials, please try again.',
        ]);
    }
}