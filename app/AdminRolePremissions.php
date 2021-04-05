<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminRolePremissions extends Model
{
    protected $table = 'admin_role_permissions';
    protected $fillable = ['id', 'role_id', 'permission_id'];
}
