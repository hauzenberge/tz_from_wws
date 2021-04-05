<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['id', 'name', 'city', 'city_link', 'adress', 'adress_link', 'phone', 'email'];
}
