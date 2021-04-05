<?php

namespace App\Admin\Controllers;

use App\CopyWrite;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CopyWriteCotroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CopyWrite';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CopyWrite());

        $grid->column('id', __('Id'));
        $grid->column('about', __('About'));
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
        $show = new Show(CopyWrite::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('about', __('About'));
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
        $form = new Form(new CopyWrite());

        $form->textarea('about', __('About'));

        return $form;
    }
}
