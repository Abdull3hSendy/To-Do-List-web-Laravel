<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.create');
    }

    public function completed()
    {
        $tasks = Task::where('is_completed', 1)->get();
        return view('tasks.completed', compact('tasks'));
    }

    public function incomplete()
    {
        $tasks = Task::where('is_completed', 0)->get();
        return view('tasks.incomplete', compact('tasks'));
    }

    public function complete(Task $task)
    {
        $task->update(['is_completed' => 1]);
        return redirect()->route('tasks.incomplete');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.incomplete');
    }
}