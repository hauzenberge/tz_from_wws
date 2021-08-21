<?php

use Illuminate\Database\Seeder;

class BlogHeaderMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Menu\BlogHeaderMenu::create([
        	'title' => 'Startseite', 
        	'href' => '#',
        ]);
        App\Models\Menu\BlogHeaderMenu::create([
        	'title' => 'weiterbildungsprogramme', 
        	'href' => '#',
        ]);
        App\Models\Menu\BlogHeaderMenu::create([
            'title' => 'Seminare', 
            'href' => '#',
        ]);
        App\Models\Menu\BlogHeaderMenu::create([
        	'title' => 'Über die dvks', 
        	'href' => '#',
        ]);
        App\Models\Menu\BlogHeaderMenu::create([
        	'title' => 'partner', 
        	'href' => '#',
        ]);
        App\Models\Menu\BlogHeaderMenu::create([
            'title' => 'bÜcher & medien', 
            'href' => '#',
        ]);
        App\Models\Menu\BlogHeaderMenu::create([
        	'title' => 'kontakt', 
        	'href' => '#',
        ]);
    }
}
