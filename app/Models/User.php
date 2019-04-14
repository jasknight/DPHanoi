<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    const NOT_APPROVED = 0;
    const APPROVED = 1;

    const MALE = 'male';
    const FEMALE = 'female';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'identity_card', 'birthday', 'gender', 'address', 'academic_level', 'specialize', 'labor_ability', 'employment_status', 'income', 'status', 'district_id', 'subdistrict_id', 'approver_id', 'admin_update_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function district()
    {
        return $this->belongsTo('App\Models\District', 'district_id');
    }

    public function subdistrict()
    {
        return $this->belongsTo('App\Models\Subdistrict', 'subdistrict_id');
    }
}
