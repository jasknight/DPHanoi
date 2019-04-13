<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $table = 'roles';

    const ROLE_NAME = [
    	'superadministrator' => 'Quản trị viên trung ương',
    	'district_administrator' => 'Quản trị viên quận, huyện',
    	'subdistrict_administrator' => 'Quản trị viên xã, phường'
    ];
}
