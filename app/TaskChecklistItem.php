<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskChecklistItem extends Model
{
    public function checklist()
    {
        return $this->belongsTo('App\TaskChecklist', 'task_checklist_id');
    }
}
