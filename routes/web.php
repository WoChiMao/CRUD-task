<?php

use App\Http\Controllers\AddingDataController;
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
    return view('welcome');
});

Route::get('/jobs', [AddingDataController::class, 'showData']);

Route::get('/add', [AddingDataController::class, 'addPage']);
Route::post('/add', [AddingDataController::class, 'addData']);

Route::get('/delete/{id}', [AddingDataController::class, 'delete']);

Route::get('/edit/{id}', [AddingDataController::class, 'editData']);
Route::post('/edit', [AddingDataController::class, 'updateData']);

