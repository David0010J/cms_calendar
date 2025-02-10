<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        // Verify if the user is authenticated
        if (Auth::check()) {
            // User is authenticated, pass data to the view
            return view('dashboard', ['user' => Auth::user()]);
        } else {
            // User is not authenticated, redirect to login
            return redirect()->route('login');
        }
    }
}
