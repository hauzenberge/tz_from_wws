<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siedbar extends Model
{
    protected $table = 'siedbar';
    protected $fillable = ['id', 'category', 'title', 'icon','text_link', 'link', 'text', 'created_at'];
}
