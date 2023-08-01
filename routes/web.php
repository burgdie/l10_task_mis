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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('departments/index', function () {
    return view('management.department.index');
})->name('departmentsIndex');

Route::get('users.index', function () {
    return view('management.users.index');
})->name('usersIndex');
