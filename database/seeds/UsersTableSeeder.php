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
        App\AdminUsers::create([
        	'username' => 'admin', 
        	'password' => bcrypt('admin'), 
        	'name' => 'Admin', 
        	'avatar' => '',
        ]);
    }
}
