<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function setImageAttribute($path){
        $this->attributes['image'] = 'courses/'.Carbon::now()->second . $path->getClientOriginalName();
        $name = 'courses/'.Carbon::now()->second . $path->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($path));
    }

    /*public function setNameAttribute($value) {
        $this->attributes['name'] = \Hash::make($value);
    }*/

}
