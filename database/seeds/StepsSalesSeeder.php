<?php

use Illuminate\Database\Seeder;

class StepsSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\StepsSales::create([
        	'title' => 'Beratungsgespräch', 
        	'icon' => 'icon-home_big_icon_1', 
        	'icon_title' => 'Beratungsgespräch',
        	'link' => '#',
        	'text' => 'Beratungsgespräch',
        ]);

        App\StepsSales::create([
        	'title' => 'Auswahl des geeigneten', 
        	'icon' => 'icon-home_big_icon_2', 
        	'icon_title' => 'Auswahl des geeigneten',
        	'link' => '#',
        	'text' => 'Auswahl des geeigneten',
        ]);

        App\StepsSales::create([
        	'title' => 'Abschluss', 
        	'icon' => 'icon-home_big_icon_3', 
        	'icon_title' => 'Abschluss',
        	'link' => '#',
        	'text' => 'Abschluss <small>
                        (IHK Zertifikat oder Personenzertifizierung DIN EN ISO/IEC 7024)</small>',
        ]);
    }
}
