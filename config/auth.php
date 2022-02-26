<?php

return [


    'defaults' => [
        'guard' => 'web',
        'passwords' => 'user',
    ],

   

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'user',
        ],
        'api' => [
            'driver' => 'jwt',
            'provider' => 'user',
            'hash' => false,
        ],
    ],

   

    'providers' => [
        'user' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        
    ],

   

    'passwords' => [
        'user' => [
            'provider' => 'user',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    

    'password_timeout' => 10800,

];
