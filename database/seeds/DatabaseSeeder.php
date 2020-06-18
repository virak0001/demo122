<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role' => '1',
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'role' => '0',
            'name' => 'normal',
            'email' => 'normal@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
