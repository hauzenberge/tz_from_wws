<?php

use Illuminate\Database\Seeder;

class AdminRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AdminRoles::create(['name' => 'Administrator', 'slug' => 'administrator']);
    }
}
