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
        'weekend',
        'updated_at'];

    public function tasks(){
    	return $this->hasMany(Task::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}