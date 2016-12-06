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
        DB::table('security.users')->insert([
            'name' => 'Admin',
            'email' => 'admin@bil.com',
            'password' => bcrypt('admin@123'),
        ]);
    }
}
