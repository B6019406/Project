<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password extends Model
{
    public function store(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here
            ]);         
       
    $password= new Password();
        $password->website= $request['website'];
        $password->url= $request['url'];
        $password->username= $request['username'];
        $password->password= $request['password'];  
        
        $user->save();
        return redirect('/home');
    }

    protected $fillable = [
        'website', 'url', 'username', 'password'
    ];

    protected $table = 'passwords';
}
