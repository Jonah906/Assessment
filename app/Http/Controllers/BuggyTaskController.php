<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;
use DB;

class BuggyTaskController extends Controller
{
    // No authentication middleware

    public function index()
    {
        $tasks = Task::all(); 

        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $task = Task::create($request->only(['title', 'description', 'status', 'due_date']));

        return response()->json($task);
        
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->only(['title', 'description', 'status', 'due_date']));
    
        return response()->json($task);
    }
    

    public function destroy($id)
    {
        Task::destroy($id); 

        return response()->json(["message" => "Task deleted"]);
    }
}
