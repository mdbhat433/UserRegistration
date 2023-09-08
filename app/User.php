<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class userRegister extends Eloquent
{
    protected $fillable = [
        'fname', 'lname','dob','gender','email','password','address','country','state','city'
    ];
}