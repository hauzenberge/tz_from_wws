<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Responce extends Model
{
    protected $table = 'response';
    protected $fillable = ['id', 'name', 'email', 'phone', 'message', 'created_at'];
}
