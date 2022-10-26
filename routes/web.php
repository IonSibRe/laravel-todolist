<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all tasks
// show - Show single task
// create - Show form to create new task
// store - Store new task
// edit - Show form to edit task
// update - Update task
// destroy - Delete task  

Route::get('/', [TaskController::class, "index"]);

Route::post("/tasks", [TaskController::class, "store"]);

Route::put("/tasks/edit/{task}", [TaskController::class, "update"]);

Route::delete("/tasks/{task}", [TaskController::class, "destroy"]);