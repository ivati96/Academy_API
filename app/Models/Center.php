<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
    protected $hidden = [
        'remember_token',
    ];

    protected $table = 'centers';
}
