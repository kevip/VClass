<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable =  [
        'name',
        'code',
        'image',
        'teacher_id',
        'category_id',
        'created_at',
        'updated_at'];

}
