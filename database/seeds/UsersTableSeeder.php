<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       if(config('admin.admin_name')) {
            User::firstOrCreate(
                ['email' => config('admin.admin_email')], [
                    'name' => config('admin.admin_name'),
                    'role' => config('admin.admin_role'),
                    'avatar' => config('admin.admin_avatar'),
                    'password' => bcrypt(config('admin.admin_password')),
                ]
            );
        }

        if(config('guest.guest_name')) {
            User::firstOrCreate(
                ['email' => config('guest.guest_email')], [
                    'name' => config('guest.guest_name'),
                    'role' => config('guest.guest_role'),
                    'avatar' => config('guest.guest_avatar'),
                    'password' => bcrypt(config('guest.guest_password')),
                ]
            );
        }


    }
}
