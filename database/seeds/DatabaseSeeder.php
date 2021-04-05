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
        $this->call(UsersTableSeeder::class);

        $this->call(BlogHeaderMenuSeeder::class);
        $this->call(BlogHeaderSubMenuSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(CopyWriteSeeder::class);
        $this->call(HeaderTextSeeder::class);
        $this->call(SEOSeeder::class);
        $this->call(WhereAreSeeder::class);
        $this->call(StepsSalesSeeder::class);
        $this->call(SiedbarSeeder::class);
        $this->call(ContactsSeeder::class);

        $this->call(AdminMenuSeeder::class);
        $this->call(AdminPremisiionsSeeder::class);
        $this->call(AdminRoleMenuSeeder::class);
        $this->call(AdminRolePremissionsSeeder::class);
        $this->call(AdminRoleUsersSeeder::class);
        $this->call(AdminRolesSeeder::class);
    }
}
