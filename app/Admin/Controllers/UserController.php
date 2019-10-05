<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Layout\Content;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\User';

    public function index(Content $content)
    {
        $content->header('Index');
        $content->description('description');
        $content->body($this->grid());
        return $content;
    }

    public function show($id, Content $content)
    {
        $content->header('Detail');
        $content->description('description');
        $content->body($this->detail($id));
        return $content;
    }

    public function edit($id, Content $content)
    {
        $content->header('Edit');
        $content->description('description');
        $content->body($this->form()->edit($id));
        return $content;
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        $content->header('Create');
        $content->description('description');
        $content->body($this->form());
        return $content;
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User);

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('email_verified_at', __('Email verified at'));
        $grid->column('password', __('Password'));
        $grid->column('address', __('Address'));
        $grid->column('tel', __('Tel'));
        $grid->column('remember_token', __('Remember token'));
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('address', __('Address'));
        $show->field('tel', __('Tel'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new User);

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        //$form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        //$form->password('password', __('Password'));
        $form->text('address', __('Address'));
        $form->text('tel', __('Tel'));
        //$form->text('remember_token', __('Remember token'));

        return $form;
    }
}
