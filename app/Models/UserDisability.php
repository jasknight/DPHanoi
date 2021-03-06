<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDisability extends Model
{
    protected $table = 'user_disability';

    protected $fillable = [
        'user_id', 'disability_id', 'detail'
    ];

    public function disability()
    {
    	return $this->belongsTo('App\Models\Disability', 'disability_id');
    }
}
