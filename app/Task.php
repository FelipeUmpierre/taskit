<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function taskType()
    {
        return $this->belongsTo('App\TaskType');
    }

    public function taskChecklists()
    {
        return $this->hasMany('App\TaskChecklist');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
