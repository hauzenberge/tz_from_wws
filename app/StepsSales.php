<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StepsSales extends Model
{
    protected $table = 'steps_sales';
    protected $fillable = ['id', 'title', 'icon', 'icon_title', 'link', 'text'];
}
