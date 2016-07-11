<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'access';
    protected $fillable =  [
        'subject',
        'start_date',
        'end_date',
        'status',
        'membership_id',
        'student_id',
        'created_at',
        'updated_at'];
}
