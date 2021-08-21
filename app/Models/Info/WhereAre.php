<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Model;

class WhereAre extends Model
{
    protected $table = 'where_are';
    protected $fillable = ['id','img_src', 'title', 'text'];
}
