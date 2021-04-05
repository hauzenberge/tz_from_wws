<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogHeaderMenu extends Model
{
    protected $table = 'blogheadermenu';
    protected $fillable = ['id', 'title', 'href'];
}
