<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
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
            $user = new User();
                $user->name= $request['name'];
                $user->email= $request['email'];
                $user->password= $encrypted = Crypt::encrypt(['password']); // Encrypts password on creation
                $user->password_hint= $request['password_hint'];
            
            $user->save();
            return redirect('/login');
        }
    }

    public function save_data(Request $request)
    {     
        $user = User::create($request->all());
        return redirect()->route('/login');
    }
}
