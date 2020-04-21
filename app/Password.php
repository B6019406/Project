<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use App\User;
use Encryptable;

class Password extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'website', 'url', 'username', 'password'
    ];

    protected $encryptable = [
        'password'
    ];

    // Encrypt password when sending to database
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Crypt::encryptString($value);
    }

    // Decrypt password for when user is logged in
    public function getPasswordAttribute($value) {
        return Crypt::decryptString($value);
    }

    public function user() {
        return $this->belongsTo("\App\User");
    }

    public function passwords() {
        return $this->belongsTo("\App\Models\Password");
    }

    protected $table = 'passwords';
}
