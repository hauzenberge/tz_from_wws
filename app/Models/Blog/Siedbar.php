<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Siedbar extends Model
{
    protected $table = 'siedbar';
    protected $fillable = ['id', 'category', 'title', 'text', 'created_at'];
}
