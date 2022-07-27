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
    return view('welcome');
});

Route::post('/store', 'TestController@store')->name('store');
//Route::get('/instructions', 'TestController@instructions')->name('instructions');

Route::get('/instruction', function () {
    return view('instruction');
})->middleware(['auth'])->name('instruction');

Route::get('/practicetest', function () {
    return view('practicetest');
})->middleware(['auth'])->name('practicetest');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
