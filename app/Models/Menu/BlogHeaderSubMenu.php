<?php

namespace App\Models\Menu;;

use Illuminate\Database\Eloquent\Model;

class BlogHeaderSubMenu extends Model
{
    protected $table = 'blogheadersubmenu';
    protected $fillable = ['id', 'menu_id', 'title', 'href'];

    public static function MenuItems($id)
    {
        return BlogHeaderSubMenu::where('menu_id', '=', $id)->get();
    }
}
