<?php

use Illuminate\Database\Seeder;

class CopyWriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CopyWrite::create([
        	'about' => '© DVKS 2019. Alle Rechte vorbehalten.',
        ]);
    }
}
