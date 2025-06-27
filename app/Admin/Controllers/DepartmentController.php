<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Department; // Pastikan model Department ada

class DepartmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Department';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Department());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('name', __('Name (Short)'));
        $grid->column('long_name', __('Long Name'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();
        
        // Menambahkan fungsi filter/pencarian
        $grid->filter(function($filter){
            // Mematikan filter default (pencarian berdasarkan ID)
            $filter->disableIdFilter();

            // Filter untuk mencari berdasarkan 'name' dan 'long_name'
            $filter->like('name', __('Name (Short)'));
            $filter->like('long_name', __('Long Name'));
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
        $show = new Show(Department::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name (Short)'));
        $show->field('long_name', __('Long Name'));
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
        $form = new Form(new Department());

        $form->display('id', __('ID'));
        $form->text('name', __('Name (Short)'))->rules('required|string|max:255');
        $form->text('long_name', __('Long Name'))->rules('required|string|max:255');
        $form->display('created_at', __('Created At'));
        $form->display('updated_at', __('Updated At'));

        return $form;
    }
}