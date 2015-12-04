<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json(Project::all());
    }

    public function find(Project $project)
    {
        return response()->json($project->get());
    }

    public function clientFrom(Project $project)
    {
        return response()->json($project->client()->get());
    }

    public function tasksFrom(Project $project)
    {
        return response()->json($project->tasks()->get());
    }

    public function save()
    {

    }
}
