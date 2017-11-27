<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
        protected $fillable = ['name'];

    public function tasklist(){
    	return $this->belongsTo('App\Task', 'task_id');
    }
}
