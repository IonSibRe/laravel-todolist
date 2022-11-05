<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index() {
        return view("index", ["tasks" => auth()->user()->tasks()->latest()->get()]);
    }

    // Store Task
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => ['required', "min:3"],
        ]);

        $formFields["user_id"] = auth()->id();

        Task::create($formFields);

        return redirect('/');
    }

    // Edit Task
    public function update(Request $request, Task $task) {
        $formFields = $request->validate([
            'title' => ['required', "min:3"],
        ]);

        $task->update($formFields);

        return redirect('/');
    }

    // Delete Task
    public function destroy(Task $task) {
        $task->delete();

        return redirect("/");
    }
}
