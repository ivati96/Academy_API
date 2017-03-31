<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $hidden = [
        'remember_token',
    ];

    protected $table = 'clients';
}
