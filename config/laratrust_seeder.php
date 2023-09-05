<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d,s',
            'report' => 'c,r,u,d,s',
            'inventories' => 'c,r,u,d,s',
            'categories' => 'c,r,u,d,s',
            'bill' => 'c,r,u,d,i,s',
            'provider' => 'c,r,u,d,s',
            'customer' => 'c,r,u,d,s',
            'product' => 'c,r,u,d,s',
            'labels' => 'c,r,u,d,s',
            'role' => 'c,r,u,d',
            'permissions' => 'c,r,u,d',
            'sale' => 'c,r,u,d,s',
            'etiquettes' => 'c,r,u,d,s',
            'argence' => 'c,r,u,d,s',
            'user' => 'c,r,u,d,s',
            'CustomerProduct' => 'c,r,u,d,s',
            'order' => 'c,r,u,d',
            'imprimer' => 'c,r,u,d,i',
            'Roles' => 'c,r,u,d',


        ],
        'comptable' => [
            'bill' => 'c,r,u,d,s,i',
            'report' => 'c,r,u,d,s',
            'order' => 'c,r,u,d',
            'imprimer' => 'c,r,u,d,i',

        ],
        'magasinier' => [

            'product' => 'c,r,u,d,s',
            'inventories' => 'c,r,u,d,s',
            'categories' => 'c,r,u,d,s',
            'provider' => 'c,r,u,d,s',
            'argence' => 'c,r,u,d,s',
            'labels' => 'c,r,u,d,s',



        ],
        'caissier' => [

            'sale' => 'c,r,u,d,s',
            'customer' => 'c,r,u,d,s',



        ],
        'role_name' => [
            'module_1_name' => 'c,r,u,d',
        ],



    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'i' => 'imprimer',
        's' => 'show',

    ],
];
