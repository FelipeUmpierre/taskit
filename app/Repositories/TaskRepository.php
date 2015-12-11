<?php

namespace App\Repositories;

use Housekeeper\Eloquent\BaseRepository;
use Housekeeper\Traits\Repository\Adjustable;

class TaskRepository extends BaseRepository {

    use Adjustable;

    /**
     * Return the name of model that this repository used.
     *
     * @return string
     */
    protected function model()
    {
        return \App\Task::class;
    }

}
