<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;
use App\Password;

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
        $passwords = Password::all()->toArray();

        $decrypted = Crypt::decrypt($encryptedValue ?? '');
        
        return view('home', compact('passwords'));
    }

    public function user()
    {
        
    }
}
