<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Adnan',
            'last_name' => 'Siddiqi',
            'country' => 'Pakistan',
            'city' => 'Karachi',
            'state' => 'Karachi',
            'zip' => '74700',
            'email' => 'kadnan@gmail.com',
            'password' => "jadejade",
            'status' => 1,
            'current_package' => 'free',
            'last_login' => '2016-09-15 12:14:45',
        ]);


    }
}
