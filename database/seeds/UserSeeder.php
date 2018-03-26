<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                [
                    'first_name' => 'superadmin',
                    'last_name' => 'superadmin',
                    'user_name' => 'superadmin',
                    'email' => 'superadmin@ex.com',
                    'password' => bcrypt('123456'),
                    'remember_token' => str_random(10)
                ],
                [
                    'first_name' => 'Juana',
                    'last_name' => 'dela Cruz',
                    'user_name' => 'Juana',
                    'email' => 'juana@ex.com',
                    'password' => bcrypt('123456'),
                    'remember_token' => str_random(10)
                ]
            ]);
    }
}
