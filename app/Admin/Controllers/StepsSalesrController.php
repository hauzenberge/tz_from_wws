<?php

namespace App\Admin\Controllers;

use App\Models\Blog\StepsSales;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StepsSalesrController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'StepsSales';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new StepsSales());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('icon', __('Icon'));
        $grid->column('icon_title', __('Icon title'));
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
        $show = new Show(StepsSales::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('icon', __('Icon'));
        $show->field('icon_title', __('Icon title'));
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
        $form = new Form(new StepsSales());

        $form->text('title', __('Title'));
        $form->text('icon', __('Icon'));
        $form->text('icon_title', __('Icon title'));
        $form->url('link', __('Link'));
        $form->textarea('text', __('Text'));

        return $form;
    }
}
