<?php

use Illuminate\Database\Seeder;

class WhereAreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\WhereAre::create([
        	'img_src' => 'img/index-s2.jpg',
        	'title' => 'Wo stehen Sie?', 
        	'text' => '<p class="text">Der nächste Schritt in Ihrer Karriere ist eine Führungsposition im Vertrieb oder Sie sind
                                    bereits Vertriebsleiter und wollen einen qualifizierten Abschluss?</p>
                    <p class="text">
                        Ein erfolgreicher Vertrieb ist der Motor eines jeden Unternehmens. Als Vertriebsleiter bewegen Sie sich jedoch oftmals auf dünnem Eis.
                    </p>
                    <ul class="list">
                        <li>Die nötige BWL-Grundlage fehlt</li>
                        <li>Führungskompetenzen fehlen </li>
                        <li>Unternehmerisches Denken muss gelernt werden </li>
                        <li>Austausch auf Augenhöhe unter Gleichgesinnten fehlt </li>
                        <li>Best-Practices zur Umsetzung im eigenen Unternehmen fehlen</li>
                    </ul>',
        ]);
    }
}
