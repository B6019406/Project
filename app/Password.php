<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Encryptable;

class Password extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'website', 'url', 'username', 'password'
    ];

    protected $encryptable = [
        'password',
    ];

    public function user() {
        return $this->belongsTo("\App\User");
    }

    public function passwords() {
        return $this->belongsTo("\App\Models\Password");
    }

    protected $table = 'passwords';
}
