<?php

use Illuminate\Database\Seeder;

class SiedbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=0; $i <= 6 ; $i++) { 
        	App\Siedbar::create([
        	'category' => 'Seminare', 
        	'title' => 'Lorem ipsum dolor sit amet', 
        	'icon' => 'icon-calendar', 
        	'text_link' => 'Weiterlesen', 
        	'link' => '#',
        	'text' => 'Aenean scelerisque urna at elementum iaculis. Fusce nibh nisi, hendrerit eu lorem eget, placerat iaculis dolor.',
        ]);
        }
    }
}
