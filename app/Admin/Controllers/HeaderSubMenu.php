<?php

namespace App\Admin\Controllers;

use App\BlogHeaderSubMenu;
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

        $grid->column('id', __('Id'));
        $grid->column('menu_id', __('Menu id'));
        $grid->column('title', __('Title'));
        $grid->column('href', __('Href'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show->field('menu_id', __('Menu id'));
        $show->field('title', __('Title'));
        $show->field('href', __('Href'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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

        $form->number('menu_id', __('Menu id'));
        $form->text('title', __('Title'));
        $form->url('href', __('Href'));

        return $form;
    }
}
