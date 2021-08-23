<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['id', 'name', 'city', 'city_link', 'adress', 'adress_link', 'phone', 'email'];
}
