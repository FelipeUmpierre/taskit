<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskChecklist extends Model
{
    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    public function checklistItems()
    {
        return $this->hasMany('App\TaskChecklistItem');
    }
}
