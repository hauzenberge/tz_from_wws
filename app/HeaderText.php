<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderText extends Model
{
    protected $table = 'headertext';
    protected $fillable = ['id', 'title', 'sub_title', 'link'];
}
