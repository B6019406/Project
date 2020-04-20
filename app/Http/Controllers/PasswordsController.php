<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Password;

class PasswordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'website' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Password
     */
    public function create(Request $request)
    {
        $website = $request->input('website');
        $url = $request->input('url');
        $username = $request->input('username');
        $password = $request->input('password');

        return Redirect::back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'website' => 'required',
            'url' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
    }

    public function index()
    {
        return view('add');
    }
}
