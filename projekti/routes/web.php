<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');

Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware(['auth', 'project.owner'])->group(function () {
    Route::get('/projects/{project_id}/edit', 'App\Http\Controllers\ProjectController@edit')->name('project.edit');
    Route::put('/projects/{project_id}', 'App\Http\Controllers\ProjectController@update')->name('project.update');
});

Route::middleware(['auth', 'project.team_member'])->group(function () {
    Route::put('/projects/{project_id}/update-progress', 'App\Http\Controllers\ProjectController@updateProgress')->name('project.updateProgress');
});