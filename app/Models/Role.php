<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    protected $table = 'roles';

    const CAN_CREATE = [
    	'superadministrator' => [
    		'superadministrator',
    		'district_administrator',
    		'subdistrict_administrator'
    	],
    	'district_administrator' => [
    		'district_administrator',
    		'subdistrict_administrator'
    	],
    	'subdistrict_administrator' => [
    		'subdistrict_administrator'
    	]
    ];
}
