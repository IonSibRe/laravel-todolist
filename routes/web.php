<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

// Get all users tasks
Route::get('/', [TaskController::class, "index"])->middleware("auth");

// Create a task
Route::post("/tasks", [TaskController::class, "store"])->middleware("auth");

// Update task
Route::put("/tasks/edit/{task}", [TaskController::class, "update"])->middleware("auth");

// Delete Task
Route::delete("/tasks/{task}", [TaskController::class, "destroy"])->middleware("auth");

// Show Register Page
Route::get("/users/register", [UserController::class, "create"]);

// Show Login Page
Route::get("/users/login", [UserController::class, "login"])->name("login");

// Register User
Route::post("/users/store", [UserController::class, "store"]);

// Login User
Route::post("/users/signin", [UserController::class, "signin"]);

Route::post("/users/logout", [UserController::class, "logout"])->middleware("auth");