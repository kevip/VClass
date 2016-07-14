<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Sending extends Model
{
    protected $table = 'sending';
    protected $fillable =  [
        'sending_file',
        'sending_date',
        'lesson_id',
        'task_id',
        'created_at',
        'updated_at'];

    public function setSendingFileAttribute($path){

        $this->attributes['sending_file'] = 'sending_file/'.Carbon::now()->second . $path->getClientOriginalName();
        $name = 'sending_file/'.Carbon::now()->second . $path->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($path));
        
    }

    public function setSendingDateAttribute(){
        $this->attributes['sending_date'] = Carbon::now();
    }
}
