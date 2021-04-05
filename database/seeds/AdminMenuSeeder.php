<?php

use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['parent_id' => 0, 'order' => 1,    'title' => "Dashboard",             'icon'  => "a-bar-chart", 'uri' => "/"],
            ['parent_id' => 0, 'order' => 5,    'title' => "Admin",                 'icon'  => "fa-tasks",    'uri' => ""],
            ['parent_id' => 2, 'order' => 6,    'title' => "Users",                 'icon'  => "fa-users",    'uri' => "auth/users"],
            ['parent_id' => 2, 'order' => 7,    'title' => "Roles",                 'icon'  => "fa-user",     'uri' => "auth/roles"],
            ['parent_id' => 2, 'order' => 8,    'title' => "Permission",            'icon'  => "fa-ban",      'uri' => "auth/permissions"],
            ['parent_id' => 2, 'order' => 9,    'title' => "Menu",                  'icon'  => "fa-bars",     'uri' => "auth/menu"],
            ['parent_id' => 2, 'order' => 10,   'title' => "Operation log",         'icon'  => "fa-history",  'uri' => "auth/logs"],

            ['parent_id' => 0, 'order' => 2,    'title' => "From Blog",             'icon'  => "fa-bars",     'uri' => ""],
            ['parent_id' => 8,'order' => 3 ,   'title' => "Blog Header Menu",      'icon'  => "fa-bars",     'uri' => "blog-header-menus"],
            ['parent_id' => 8,'order' => 4,   'title' => "Blog Header Sub Menus", 'icon'  => "fa-bars",     'uri' => "blog-header-sub-menus"],
            ['parent_id' => 8,'order' => 5,   'title' => "Logos", 'icon'  => "fa-bars",     'uri' => "logos"],
            ['parent_id' => 8,'order' => 6,   'title' => "Copywrites", 'icon'  => "fa-bars",     'uri' => "copy-writes"],
            ['parent_id' => 8,'order' => 7,   'title' => "Header Text", 'icon'  => "fa-bars",     'uri' => "header-texts"],
            ['parent_id' => 8,'order' => 8,   'title' => "SEO", 'icon'  => "fa-bars",     'uri' => "s-e-os"],
            ['parent_id' => 8,'order' => 9,   'title' => "Where Are", 'icon'  => "fa-bars",     'uri' => "where-ares"],
            ['parent_id' => 8,'order' => 10,   'title' => "Steps Sales", 'icon'  => "fa-bars",     'uri' => "steps-sales"],
            ['parent_id' => 8,'order' => 11,   'title' => "Siedbar", 'icon'  => "fa-bars",     'uri' => "siedbars"],
            ['parent_id' => 8,'order' => 11,   'title' => "Contacts", 'icon'  => "fa-bars",     'uri' => "contacts"],

            ['parent_id' => 0,'order' => 2,   'title' => "Responses", 'icon'  => "fa-apple",     'uri' => "responces"],     
        ];

        foreach ($items as $item) {
        	App\AdminMenu::create($item);
        }
    }
}
