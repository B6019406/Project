<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

use App\Password;

class PasswordsController extends Controller
{
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
            'password' => ['required', 'string', 'min:8']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {       
            // Creates new login details to store in database
            $password= new Password();
                $password->website= $request['website'];
                $password->url= $request['url'];
                $password->username= $request['username'];
                $password->password= $encrypted = Crypt::encrypt(['password']); // Encrypts password on creation
            
            $password->save();
            return redirect('/home');
        }
    }

    public function save_data(Request $request)
    {     
        $password = Password::create($request->all());
        return redirect()->route('/home');
    }
}
