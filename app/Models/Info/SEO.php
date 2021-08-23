<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Model;

class SEO extends Model
{
    protected $table = 'seo';
    protected $fillable = ['id', 'title', 'keywords', 'description'];
}
