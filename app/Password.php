<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Password extends Model
{
    public function store(Request $request)
    {       
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

    public function user() {
        return $this->belongsTo("\App\User");
    }

    public function passwords() {
        return $this->belongsTo("\App\Models\Password");
    }

    protected $table = 'passwords';
}
