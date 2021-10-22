<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// cakelist page view
Route::get('list',[UserController::class ,'index']);
// delete
Route::get('delete/{id}',[UserController::class,'delete']);
//edit
Route::get('edit/{id}',[UserController::class,'edit']);
// update on db after edit
Route::post('update',[UserController::class,'enterdb']);
// adding new data
Route::view('go','addnew');
Route::post('add',[UserController::class,'add']);