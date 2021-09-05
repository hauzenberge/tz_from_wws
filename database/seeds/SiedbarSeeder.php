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
        	App\Models\Blog\Siedbar::create([
        	'category' => 'Seminare', 
        	'title' => 'Lorem ipsum dolor sit amet', 
        	'text' => '<p> <strong> Lorem Ipsum </strong> ist ein Fischtext, der häufig im Print- und Webdesign verwendet wird. Lorem Ipsum ist seit dem frühen 16. Jahrhundert der Standard-"Fisch" für lateinische Texte. Damals erstellte ein namenloser Drucker eine große Sammlung von Schriftgrößen und -formen mit Lorem Ipsum, um Muster zu drucken. Lorem Ipsum hat nicht nur fünf Jahrhunderte ohne nennenswerte Veränderungen erfolgreich überstanden, sondern ist auch in das elektronische Design eingestiegen. Seine Popularität in der Neuzeit war die Veröffentlichung von Letraset-Blättern mit Lorem Ipsum-Beispielen in den 60er Jahren und in jüngerer Zeit elektronische Satzprogramme wie Aldus PageMaker, dessen Vorlagen Lorem Ipsum verwenden. </p>.',
        ]);
        }
    }
}
