<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/', [ListingController::class, 'index']);

//create form
Route::get('/lists/create', [ListingController::class, 'create']);

//store form data
Route::post('/lists', [ListingController::class, 'store']);

//Show Edit
Route::get('/lists/{list}/edit', [ListingController::class, 'edit']);

//Single List
Route::get('/lists/{list}', [ListingController::class, 'show']);

//update 
Route::put('/lists/{list}', [ListingController::class, 'update']);

// delete 
Route::delete('/lists/{list}', [ListingController::class, 'destroy']);


Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
