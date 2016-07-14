<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teacher';

    public function courses(){
    	return $this->hasMany(Course::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
