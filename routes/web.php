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



Route::get('hello', function () {
    return response("Hallo World", 201)->header('Content-Type', 'text/json');
});

Route::get('/post/{id}', function ($id) {
    return response('Post Id ' . $id, '200');
});

Route::get('/search', function (Request $req) {
    return response('Name :' . $req->name);
});

Route::get('/', [ListingController::class, 'index']);

//Single List

Route::get('/lists/{list}', [ListingController::class, 'show']);
