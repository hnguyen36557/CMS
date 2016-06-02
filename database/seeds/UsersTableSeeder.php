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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678')
            ],

            [
                'name' => 'Hieu',
                'email' => 'hieu@gmail.com',
                'password' => bcrypt('12345678')
            ]
        ]);
    }
}
