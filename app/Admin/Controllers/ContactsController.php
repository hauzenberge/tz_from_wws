<?php

namespace App\Admin\Controllers;

use App\Models\Info\Contacts;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ContactsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contacts';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contacts());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('city', __('City'));
        $grid->column('city_link', __('City link'));
        $grid->column('adress', __('Adress'));
        $grid->column('adress_link', __('Adress link'));
        $grid->column('phone', __('Phone'));
        $grid->column('email', __('Email'));
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
        $show = new Show(Contacts::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('city', __('City'));
        $show->field('city_link', __('City link'));
        $show->field('adress', __('Adress'));
        $show->field('adress_link', __('Adress link'));
        $show->field('phone', __('Phone'));
        $show->field('email', __('Email'));
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
        $form = new Form(new Contacts());

        $form->text('name', __('Name'));
        $form->text('city', __('City'));
        $form->text('city_link', __('City link'));
        $form->text('adress', __('Adress'));
        $form->text('adress_link', __('Adress link'));
        $form->mobile('phone', __('Phone'));
        $form->email('email', __('Email'));

        return $form;
    }
}
