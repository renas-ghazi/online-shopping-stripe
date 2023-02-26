<?php

return [



    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],


    'order' => [
        'driver' => 'eloquent',
        'model' => App\Http\Models\UserTb::class,

    ],
    'admin' => [
        'driver' => 'eloquent',
        'model' => App\Http\Models\Admin::class,

    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' =>'session',
            'provider' => 'admins'

        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],

    ],



    'providers' => [

        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],


        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],



    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Http\Models\Admin::class,
        ],
    ],



    'password_timeout' => 10800,

];
