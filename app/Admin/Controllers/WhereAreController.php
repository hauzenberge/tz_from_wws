<?php

namespace App\Admin\Controllers;

use App\WhereAre;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WhereAreController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'WhereAre';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WhereAre());

        $grid->column('id', __('Id'));
        $grid->column('img_src', __('Img src'));
        $grid->column('title', __('Title'));
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
        $show = new Show(WhereAre::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('img_src', __('Img src'));
        $show->field('title', __('Title'));
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
        $form = new Form(new WhereAre());

        $form->text('img_src', __('Img src'));
        $form->text('title', __('Title'));
        $form->textarea('text', __('Text'));

        return $form;
    }
}
