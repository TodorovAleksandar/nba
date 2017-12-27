<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use\app\Team;

class team extends Model
{
    protected $fillable = [
        'name', 'email', 'address','city'
    ];

}
