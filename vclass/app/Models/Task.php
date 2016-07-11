<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    protected $fillable =  [
        'title',
        'subtitle',
        'description',
        'created_at',
        'updated_at'];
}
