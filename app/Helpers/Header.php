<?php
namespace App\Helpers;

use App\Models\Info\SEO;
use App\Models\Info\Logos;
use App\Models\Menu\BlogHeaderMenu;
use App\Models\Menu\BlogHeaderSubMenu;
use App\Models\Info\HeaderText;

class Header
{

    public static function SEO()
    {
        $seo = SEO::paginate(1);
        if (count($seo) > 0) {
            foreach ($seo as $metatag) {
                echo '<title>'.$metatag->title.'</title>';
                echo '<meta name="keywords" content="'.$metatag->keywords.'" />';
            
                echo '<meta name="description" content="'.$metatag->description.'" />';
            }
        }
    }

    public static function Logo($name)
    {
        echo ' <img src="'.asset(Logos::where('name', '=', $name)->get()[0]->src).'" alt="">';
    }

    public static function BlogHeaderSubMenu($id)
    {
        $menu_items = BlogHeaderSubMenu::MenuItems($id);
        if (count($menu_items) > 0 ) {
            echo '<div class="sub-menu">
                                        <ul>';
            foreach ($menu_items as $menu_item) {
               // dd();
                if ($menu_item->menu_id == $id) {
                    echo '<li><a href="'.url($menu_item->href).'">'.$menu_item->title.'</a></li>';
                }
                
            }
            echo '</ul>
                                    </div>';
        }else echo null;
    }

    public static function HeaderMenu()
    {
        $menu_items = BlogHeaderMenu::all();

        foreach ($menu_items as $menu_item) {
            echo '<li>
                     <a href="'.
                     url($menu_item->href)
                     .'">'.
                     $menu_item->title
                     .'</a>';
            Header::BlogHeaderSubMenu($menu_item->id);
            echo '</li>';
        }
    }

    public static function HeaderText()
    {
        $text = HeaderText::find(1);
        echo '<div class="col-12"> <div class="section-container"><div class="article"><h1 class="title">';
        echo $text->title;
        echo '</h1> <span class="sub-title">';
        echo $text->sub_title;
        echo '</span></div>';
        echo '<a href="" class="link">'.$text->link_text.'<i class="icon-right-arrow"></i></a></div></div>';
    }
}