<?php

use App\Http\Controllers\ListingController;
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


//Single List

Route::get('/lists/{list}', [ListingController::class, 'show']);

