<?php

use Illuminate\Database\Seeder;

class SEOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Info\SEO::create([
        	'title' => 'DVKS',
        ]);
    }
}
