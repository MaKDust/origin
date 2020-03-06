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

    'guest_name' => env('GUEST_NAME', ''),
    'guest_role' => env('GUEST_ROLE', ''),
    'guest_avatar' => env('GUEST_AVATAR', ''),
    'guest_email' => env('GUEST_EMAIL', ''),
    'guest_password' =>env('GUEST_PASSWORD', '')
    ];