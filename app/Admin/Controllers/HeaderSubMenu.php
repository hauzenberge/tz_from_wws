<?php

namespace App\Admin\Controllers;

use App\Models\Menu\BlogHeaderSubMenu;
use App\Models\Menu\BlogHeaderMenu;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HeaderSubMenu extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'BlogHeaderSubMenu';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BlogHeaderSubMenu());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('menu_title')->display(function () {
            return BlogHeaderMenu::find($this->menu_id)->title;
        });
        $grid->column('title', __('Title'));
        $grid->column('href', __('Href'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(BlogHeaderSubMenu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->menu_title()->as(function () {
            return BlogHeaderMenu::find($this->menu_id)->title;
        });
        $show->field('title', __('Title'));
        $show->field('href', __('Href'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new BlogHeaderSubMenu());

        $form->select('menu_id', __('Menu Title'))
        ->options(BlogHeaderMenu::all()->pluck('title', 'id'))
        ->rules('required');

        $form->text('title', __('Title'));
        $form->url('href', __('Href'));

        return $form;
    }
}
