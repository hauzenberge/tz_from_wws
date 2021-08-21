<?php

use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Info\Logos::create([
        	'name' => 'header', 
        	'src' => 'img/logo.jpg',
        ]);
        App\Models\Info\Logos::create([
        	'name' => 'footer', 
        	'src' => 'img/footer-1.png',
        ]);
        App\Models\Info\Logos::create([
        	'name' => 'footer', 
        	'src' => 'img/footer-2.png',
        ]);
    }
}
