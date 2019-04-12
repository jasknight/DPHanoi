<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'superadministrator' => 'c,r,u,d',
            'district_administrator' => 'c,r,u,d',
            'subdistrict_administrator' => 'c,r,u,d',
            'user' => 'r,u'
        ],
        'district_administrator' => [
            'district_administrator' => 'c,r,u,d',
            'subdistrict_administrator' => 'c,r,u,d',
            'user' => 'c,r,u,d',
        ],
        'subdistrict_administrator' => [
            'subdistrict_administrator' => 'c,r,u,d',
            'users' => 'c,r,u,d'
        ],
        'user' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
//        'cru_user' => [
//            'profile' => 'c,r,u'
//        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
