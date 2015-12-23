<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskChecklistItem extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['task_checklist_id', 'item', 'status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function checklist()
    {
        return $this->belongsTo('App\TaskChecklist', 'task_checklist_id');
    }
}
