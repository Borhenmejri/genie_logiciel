<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    // Logout method
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();
        
        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        // Redirect to the login page or home
        return redirect('/login');
    }
}
