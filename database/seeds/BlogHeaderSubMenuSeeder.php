<?php

use Illuminate\Database\Seeder;

class BlogHeaderSubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Menu\BlogHeaderSubMenu::create([
        	'menu_id' => 2,
        	'title' => 'Vertriebsleiterausbildung (IHK', 
        	'href' => '/#',
        ]);
        App\Models\Menu\BlogHeaderSubMenu::create([
        	'menu_id' => 2,
        	'title' => 'Geprüfter Vertriebsleiter (CEA)', 
        	'href' => '/#',
        ]);
        App\Models\Menu\BlogHeaderSubMenu::create([
        	'menu_id' => 2,
        	'title' => 'Trainer für betriebliche Weiterbildung (IHK)', 
        	'href' => '/#',
        ]);
        App\Models\Menu\BlogHeaderSubMenu::create([
        	'menu_id' => 2,
        	'title' => 'Management- und Führungstrainer (IHK)', 
        	'href' => '/#',
        ]);
    }
}
