<?php

use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Contacts::create([
        	'name' => 'DVKS Deutsche Verkäuferschule® ', 
        	'city' => 'Mehrhooger Straße 1c', 
        	'city_link' => '#', 
        	'adress' => 'D-46499 Hamminkel', 
        	'adress_link' => '#', 
        	'phone' => '+49 6104 4099846',
        	'email' => 'willkommen@verkaeuferschule.de',
        ]);
    }
}
