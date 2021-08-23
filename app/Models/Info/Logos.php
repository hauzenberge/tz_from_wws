<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Model;

class Logos extends Model
{
    protected $table = 'logos';
    protected $fillable = ['id', 'name', 'src'];
}
