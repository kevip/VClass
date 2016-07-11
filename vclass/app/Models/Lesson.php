<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lesson';
    protected $fillable =  [
        'subject',
        'video',
        'description',
        'course_id',
        'created_at',
        'updated_at'];
}
