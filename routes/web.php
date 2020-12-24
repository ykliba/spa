<?php

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

Route::get('/', function () {
    return view('todo');
});

Route::group(["middleware"=>"auth"],function(){
    return view('todo');
});

Route::get('/todo',[App\Http\Controllers\TodoController::class, "index"])->name('index');


Auth::routes();


