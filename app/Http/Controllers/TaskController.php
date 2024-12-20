<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskCollection;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;

class TaskController extends Controller
{
  public function __construct()
  {
    // 2nd parameter is the name of the route parameter
    $this->authorizeResource(Task::class, 'task');
  }

  public function index()
  {
    $tasks = QueryBuilder::for(Task::class)
      ->allowedFilters('is_done', 'title')
      ->defaultSort('-created_at')
      ->allowedSorts(['title', 'is_done', 'created_at'])
      ->paginate();
    return new TaskCollection($tasks);
  }
  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreTaskRequest $request)
  {
    $validated = $request->validated();
    $task = Auth::user()->tasks()->create($validated);

    return new TaskResource($task);
  }

  /**
   * Display the specified resource.
   */
  public function show(Task $task)
  {
    return TaskResource::make($task);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateTaskRequest $request, Task $task)
  {
    $validated = $request->validated();
    $task->update($validated);

    return new TaskResource($task);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Task $task)
  {
    $task->delete();
    return response()->noContent();
  }
}
