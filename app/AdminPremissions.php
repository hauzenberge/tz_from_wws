<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPremissions extends Model
{
    protected $table = 'admin_permissions';
    protected $fillable = ['id', 'name', 'slug', 'http_method', 'http_path'];
}
