<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Spatie\QueryBuilder\QueryBuilder;

class ProjectController extends Controller
{

  public function __construct() {
    // project Id is called project in our routes
    $this->authorizeResource(Project::class, 'project');
  }
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $projects = QueryBuilder::for(Project::class)
      ->allowedIncludes('tasks')
      ->paginate();

    return new ProjectCollection($projects);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreProjectRequest $request)
  {
    $validated = $request->validated();
    $project = Auth::user()->projects()->create($validated);

    return new ProjectResource($project);
  }

  /**
   * Display the specified resource.
   */
  public function show(Project $project)
  {
    // return new ProjectResource($project);      // load all Projects by default
    return (new ProjectResource($project))
      ->load('tasks')
      ->load('members');
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateProjectRequest $request, Project $project)
  {
    $validated = $request->validated();
    $project->update($validated);

    return new ProjectResource($project);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Project $project)
  {
    $project->delete();

    return response()->noContent();
  }
}
