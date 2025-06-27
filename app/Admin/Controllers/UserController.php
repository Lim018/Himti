<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'User';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        $grid->column('email_verified_at', __('Email verified at'))->hide();
        $grid->column('password', __('Password'))->hide();
        $grid->column('remember_token', __('Remember token'))->hide();

        // --- PENAMBAHAN FILTER DIMULAI DI SINI ---
        $grid->filter(function($filter){

            // Baris ini akan menghapus filter default berdasarkan ID agar lebih bersih
            $filter->disableIdFilter();

            // Menambahkan filter untuk mencari berdasarkan 'name'
            // 'like' berarti pencarian akan mencocokkan sebagian kata (misal: mencari 'min' akan menemukan 'admin')
            $filter->like('name', __('Name'));

            // Menambahkan filter untuk mencari berdasarkan 'email'
            $filter->like('email', __('Email'));

            // Menambahkan filter rentang tanggal untuk 'created_at'
            // 'between' akan membuat 2 input tanggal (dari tanggal - sampai tanggal)
            $filter->between('created_at', __('Creation Date'))->datetime();
        });
        // --- PENAMBAHAN FILTER SELESAI ---

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
        $form = new Form(new User());

        $form->display('id', __('ID'));
        $form->text('name', __('Name'))->rules('required');
        $form->email('email', __('Email'))->rules('required');

        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));

        $form->password('password', __('Password'))->rules('nullable|confirmed|min:8');
        $form->password('password_confirmation', __('Password confirmation'));

        $form->saving(function (Form $form) {
            $form->ignore(['password_confirmation']);

            if ($form->password && $form->model()->password != $form->password) {
                $form->password = Hash::make($form->password);
            } else {
                $form->ignore(['password']);
            }
        });

        $form->tools(function (Form\Tools $tools) {
            $tools->disableView();
        });

        return $form;
    }
}