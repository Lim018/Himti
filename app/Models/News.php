<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'title',
        'department_id',
        'date',
        'body',
        'desc',
        'image',
    ];

     public function department()
    {
        // 'department_id' adalah foreign key di tabel tb_companyprofile_news
        return $this->belongsTo(Department::class, 'department_id');
    }
}
