<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; 
use App\Http\Controllers\UserController;
// Import the TaskController

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Define route for retrieving user info
Route::get('/user-info', function () {
    $user = [
        'name' => 'Rahul Sharma',
        'phone' => '9876543210', // Assuming phone number is not sensitive
        'photo' => null, // Photo URL not provided in the information
        'coins' => 8848,
        'membership' => 'gold',
        'tasks' => [
            [
                'title' => 'Watch Video',
                'description' => 'Watch Video to earn reward coins',
                'reward' => 30,
            ],
            [
                'title' => 'Quest Tasks', // Assuming reward is not mentioned for Quest Tasks
                'description' => null, // Description not provided
                'reward' => null,
            ],
        ],
    ];

    return response()->json($user);
});

// Define route for creating tasks
Route::get('/tasks', [TaskController::class, 'index']); // Get all tasks
Route::post('/tasks', [TaskController::class, 'store']); // Create a task
Route::get('/tasks/{id}', [TaskController::class, 'show']); // Get a task by ID
Route::put('/tasks/{id}', [TaskController::class, 'update']); // Update a task by ID
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']); // Delete a task by ID

// user-task ek mai hi
// Create a new user
Route::post('/users', [UserController::class, 'store']);

// Get all users
Route::get('/users', [UserController::class, 'index']);

// Get a single user by ID
Route::get('/users/{id}', [UserController::class, 'show']);

// Update a user by ID
Route::put('/users/{id}', [UserController::class, 'update']);

// Delete a user by ID
Route::delete('/users/{id}', [UserController::class, 'destroy']);