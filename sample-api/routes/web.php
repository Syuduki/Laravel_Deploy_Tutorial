<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoListController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoUpdateController;
use App\Http\Controllers\TodoDeleteController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('todo/', TodoListController::class);
Route::get('todo/detail/', TodoController::class);
Route::put('todo/detail/', TodoUpdateController::class);
Route::delete('todo/detail/', TodoDeleteController::class);