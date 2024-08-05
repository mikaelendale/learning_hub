<?php
return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'students',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
    ],

    'providers' => [
        'students' => [
            'driver' => 'eloquent',
            'model' => App\Models\Students::class,
        ],
    ],

    'passwords' => [
        'students' => [
            'provider' => 'students',
            'table' => 'password_reset_tokens', // You can change this if you have a different reset table for students
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
