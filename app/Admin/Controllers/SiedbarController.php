<?php

namespace App\Admin\Controllers;

use App\Siedbar;
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
        $grid->column('icon', __('Icon'));
        $grid->column('text_link', __('Text link'));
        $grid->column('link', __('Link'));
        $grid->column('text', __('Text'));
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
        $show = new Show(Siedbar::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category', __('Category'));
        $show->field('title', __('Title'));
        $show->field('icon', __('Icon'));
        $show->field('text_link', __('Text link'));
        $show->field('link', __('Link'));
        $show->field('text', __('Text'));
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
        $form = new Form(new Siedbar());

        $form->text('category', __('Category'));
        $form->text('title', __('Title'));
        $form->text('icon', __('Icon'));
        $form->text('text_link', __('Text link'));
        $form->url('link', __('Link'));
        $form->textarea('text', __('Text'));

        return $form;
    }
}
