<?php

use Illuminate\Database\Seeder;

class HeaderTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\HeaderText::create([
        	'title' => 'Vertriebsleiter-Ausbildung IHK oder CEA', 
        	'sub_title' => 'Nutzen Sie Ihre Chance', 
        	'link' => 'mehr erfahren ',
        ]);
    }
}
