<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\News; // Import your News model
use \App\Models\Department; // Import your Department model for dropdown

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News'; // Set the title for the News resource

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        // Columns to display in the grid view
        $grid->column('id', __('Id')); // Make ID sortable
        $grid->column('title', __('Title')); // Allow editing title directly in grid
        // Display the department name instead of just the ID
        $grid->column('department.name', __('Department'));
        $grid->column('date', __('Date'))->display(function ($date) {
            return date('d M Y', strtotime($date)); // Format date for better readability
        })->sortable();
        $grid->column('body', __('Body'))->hide(); // Hide long text by default
        $grid->column('desc', __('Description'))->hide(); // Hide long text by default
        $grid->column('image', __('Image'))->image(env('APP_URL') . '/uploads/', 50, 50); // Display image if stored as path
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        // Add filters for better data management
        $grid->filter(function($filter){
            $filter->like('title', __('Title'));
            $filter->equal('department_id', __('Department'))->select(Department::pluck('name', 'id'));
            $filter->between('date', __('Date'))->date();
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
        $show = new Show(News::findOrFail($id));

        // Fields to display in the detail view
        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        // Show department name from the relationship
        $show->field('department.name', __('Department Name'));
        $show->field('date', __('Date'));
        $show->field('body', __('Body'));
        $show->field('desc', __('Description'));
        $show->field('image', __('Image'))->image(); // Display full-size image
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
        $form = new Form(new News());

        // Form fields for creating/editing news
        $form->text('title', __('Title'))->rules('required|string|max:255');

        // Dropdown for selecting department
        $form->select('department_id', __('Department'))
             ->options(Department::pluck('name', 'id'))
             ->rules('required');

        $form->date('date', __('Date'))->default(date('Y-m-d'))->rules('required|date');
        $form->UEditor('body', __('Body'))->rules('required|string'); // Assuming you have UEditor or similar rich text editor
        $form->textarea('desc', __('Description'))->nullable()->rules('nullable|string|max:500');

        // Image upload field (assuming images are stored in storage/app/public/uploads and linked via public symlink)
        $form->image('image', __('Image'))->uniqueName()->removable()->nullable();

        // Callback before saving (optional, e.g., to handle image uploads if not using form->image directly)
        $form->saving(function (Form $form) {
            // Example: if you were manually handling image upload from a file field
            // if ($form->image && $form->image->extension()) {
            //     $form->image = $form->image->store('news_images', 'public');
            // }
        });


        return $form;
    }
}