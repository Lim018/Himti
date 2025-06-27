<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\News;
use \App\Models\Department;
// Kita tidak perlu lagi 'Storage' di sini, tapi tidak apa-apa jika tetap ada
use Illuminate\Support\Facades\Storage; 

class NewsController extends AdminController
{
    /**
     * Judul untuk resource ini.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Membuat tampilan grid (daftar data).
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('title', __('Title'));
        $grid->column('department.name', __('Department'));
        $grid->column('date', __('Date'))->display(function ($date) {
            return date('d M Y', strtotime($date));
        })->sortable();

        $grid->column('body', __('Body'))->hide();
        $grid->column('desc', __('Description'))->hide();
        $grid->column('image', __('Image'))->image('');

        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        $grid->filter(function($filter){
            $filter->like('title', __('Title'));
            $filter->equal('department_id', __('Department'))->select(Department::pluck('name', 'id'));
            $filter->between('date', __('Date'))->date();
        });

        return $grid;
    }

    /**
     * Membuat tampilan detail.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('department.name', __('Department Name'));
        $show->field('date', __('Date'));
        $show->field('body', __('Body'))->unescape();
        $show->field('desc', __('Description'));
        $show->field('image', __('Image'))->image();
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Membuat form untuk create dan edit.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->text('title', __('Title'))->rules('required|string|max:255');
        $form->select('department_id', __('Department'))
             ->options(Department::pluck('name', 'id'))
             ->rules('required');
        $form->date('date', __('Date'))->default(date('Y-m-d'))->rules('required|date');
        $form->textarea('body', __('Body'))->rules('required|string');
        $form->text('desc', __('Description'))->rules('nullable|string|max:500');
        $form->image('image', __('Image'))->uniqueName()->removable()->rules('nullable|image');

        return $form;
    }
}