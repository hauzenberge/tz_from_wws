<?php

namespace App\Admin\Controllers;

use App\Models\Info\Logos;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LogosControler extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Logos';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Logos());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('src', __('Src'))->display(function ($src) {
            return '<img src="'.asset($src).'" style = "background-color: black" alt="">';

        });

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
        $show = new Show(Logos::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('src', __('Src'));
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
        $form = new Form(new Logos());

        $form->text('name', __('Name'));
        $form->url('src', __('Src'));

       // $form->file('src');

        return $form;
    }
}
