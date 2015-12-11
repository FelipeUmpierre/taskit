<?php

namespace App\Repositories;

use Housekeeper\Eloquent\BaseRepository;
use Housekeeper\Traits\Repository\Adjustable;

class ProjectRepository extends BaseRepository {

    use Adjustable;

    /**
     * Return the name of model that this repository used.
     *
     * @return string
     */
    protected function model()
    {
        return \App\Project::class;
    }

}
