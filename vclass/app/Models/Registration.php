<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registration';
    protected $fillable =  [
        'registration_date',
        'student_id',
        'course_id',
        'created_at',
        'updated_at'];
}
