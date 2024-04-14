<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $tasks = Task::all();
        return response()->json(['tasks' => $tasks]);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'coins_reward' => 'required|integer',
        ]);

        // Create the task with the provided user_id
        $task = Task::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'coins_reward' => $validatedData['coins_reward'],
        ]);

        // Return a JSON response with the newly created task and a 201 status code
        return response()->json(['message' => 'Task created successfully', 'task' => $task], 201);
    }

    // Display the specified resource.
    public function show(Task $task)
    {
        return response()->json(['task' => $task]);
    }

    // Update the specified resource in storage.
    public function update(Request $request, Task $task)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'coins_reward' => 'required|integer',
        ]);

        // Update the task
        $task->update($validatedData);

        // Return a JSON response with a success message and the updated task
        return response()->json(['message' => 'Task updated successfully', 'task' => $task]);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        $task = Task::find($id);
        

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        // Delete the user
        $task->delete();

        return response()->json(['message' => 'Task deleted successfully']);
    }
}
