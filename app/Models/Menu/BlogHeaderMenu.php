<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

use App\Models\Menu\BlogHeaderSubMenu;

class BlogHeaderMenu extends Model
{
    protected $table = 'blogheadermenu';
    protected $fillable = ['id', 'title', 'href'];

    public function MenuTitle($id){
        return BlogHeaderSubMenu::find(BlogHeaderSubMenu::find($id)->menu_id)->title;
    }
}
