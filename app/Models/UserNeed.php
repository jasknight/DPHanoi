<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserNeed extends Model
{
    protected $table = 'user_need';

    public function need()
    {
    	return $this->belongsTo('App\Models\Need');
    }
}
