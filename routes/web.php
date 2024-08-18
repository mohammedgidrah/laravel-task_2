<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Moviecontroller;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});

Route::get('/', Moviecontroller::class .'@index')->name('movies.index');

Route::get('/movies/create', Moviecontroller::class . '@create')->name('movies.create');

Route::post('/movies', Moviecontroller::class .'@store')->name('movies.store');

Route::get('/movies/{movie}', Moviecontroller::class .'@show')->name('movies.show');

Route::get('/movies/{movie}/edit', Moviecontroller::class .'@edit')->name('movies.edit');

Route::put('/movies/{movie}', Moviecontroller::class .'@update')->name('movies.update');

Route::delete('/movies/{movie}', Moviecontroller::class .'@destroy')->name('movies.destroy');

