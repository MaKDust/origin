<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Default admin user
    |--------------------------------------------------------------------------
    |
    | Default user will be created at project installation/deployment
    |
    */

    'admin_name' => env('ADMIN_NAME', ''),
    'admin_role' => env('ADMIN_ROLE', ''),
    'admin_avatar' => env('ADMIN_AVATAR', ''),
    'admin_email' => env('ADMIN_EMAIL', ''),
    'admin_password' =>env('ADMIN_PASSWORD', '')
    ];