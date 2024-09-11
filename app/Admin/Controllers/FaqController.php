<?php

namespace App\Admin\Controllers;

use App\Models\FAQ;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FaqController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'FAQ';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FAQ());

        $grid->column('id', __('Id'));
        $grid->column('question', __('Question'));
        $grid->column('answer', __('Answer'));
        $grid->column('sort', __('Order'));
        $grid->column('status', __('Status'))->switch()->sortable();
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
        $show = new Show(FAQ::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('question', __('Question'));
        $show->field('answer', __('Answer'));
        $show->field('sort', __('Order'));
        $show->field('status', __('Status'));
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
        $form = new Form(new FAQ());

        $form->textarea('question', __('Question'));
        $form->ckeditor('answer', __('Answer'));
        $form->number('sort', __('Order'));
        $form->switch('status', __('Status'));

        return $form;
    }
}
