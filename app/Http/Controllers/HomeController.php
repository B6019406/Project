<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Password;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get Authenticated users email
        $userId = Auth::user()->email;

        $passwords = Password::select('website', 'url', 'username', 'password')->where('username', $userId)->get();

        
        
        return view('home', compact('passwords'));
    }

    public function user()
    {
        
    }
}
