<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HackedUser extends Model
{
    protected $fillable = [
       'email', 'password'
    ];
}
