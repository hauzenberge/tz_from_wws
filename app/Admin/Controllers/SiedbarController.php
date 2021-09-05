<?php

namespace App\Admin\Controllers;

use App\Models\Blog\Siedbar;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SiedbarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Siedbar';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Siedbar());

        $grid->column('id', __('Id'));
        $grid->column('category', __('Category'));
        $grid->column('title', __('Title'));
        $grid->column('text', __('Text'));

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
        $show = new Show(Siedbar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category', __('Category'));
        $show->field('title', __('Title'));
        $show->field('text', __('Text'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Siedbar());

        $form->text('category', __('Category'));
        $form->text('title', __('Title'));
        $form->ckeditor('text');
        return $form;
    }
}
