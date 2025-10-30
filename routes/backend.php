<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard'); // create this view or change as needed
    })->name('dashboard');

    // example backend route
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users.index');
});