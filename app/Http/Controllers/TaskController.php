<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;

class TaskController extends Controller
{
  // Repository storage.
  protected $tasks;

  public function __construct(TaskRepository $task)
  {
    $this->middleware('auth');
    $this->tasks = $task;
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'name' => 'required|max:255',
    ]);

    $request->user()->tasks()->create([
        'name' => $request->name,
    ]);

    return redirect('/');
  }

  public function index(Request $request)
  {
    $tasks = Task::where('user_id', $request->user()->id)->get();

    return view('tasks', [
        'tasks' => $this->tasks->forUser($request->user()),
    ]);

  }

  public function destroy(Request $request, Task $task)
  {
    $this->authorize('destroy', $task);
    $task->delete();

    return redirect('/');
  }
}