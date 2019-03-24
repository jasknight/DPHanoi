<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDisability extends Model
{
    protected $table = 'user_disability';

    protected $fillable = [
        'user_id', 'disability_id', 'detail'
    ];
}
