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
        App\BlogHeaderMenu::create([
        	'title' => 'Startseite', 
        	'href' => '#',
        ]);
        App\BlogHeaderMenu::create([
        	'title' => 'weiterbildungsprogramme', 
        	'href' => '#',
        ]);
        App\BlogHeaderMenu::create([
            'title' => 'Seminare', 
            'href' => '#',
        ]);
        App\BlogHeaderMenu::create([
        	'title' => 'Über die dvks', 
        	'href' => '#',
        ]);
        App\BlogHeaderMenu::create([
        	'title' => 'partner', 
        	'href' => '#',
        ]);
        App\BlogHeaderMenu::create([
            'title' => 'bÜcher & medien', 
            'href' => '#',
        ]);
        App\BlogHeaderMenu::create([
        	'title' => 'kontakt', 
        	'href' => '#',
        ]);
    }
}
