<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Model;

class CopyWrite extends Model
{
    protected $table = 'copywryte';
    protected $fillable = ['id', 'about'];
}
