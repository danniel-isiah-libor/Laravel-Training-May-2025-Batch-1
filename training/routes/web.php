<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', function(Request $request) {
    $html = "<ul>";
        $html .= "<li>Name: {$request->name}</li>";
        $html .= "<li>Birth date: {$request->birthdate}</li>";
        $html .= "<li>Email: {$request->email}</li>";
    $html .= "</ul>";

    return $html;
})->name('client');

Route::view('/register', 'register')->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

Route::view('/login', 'login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.store');

Route::prefix('/work-experience')->name('work-experience.')->group( function() {
    Route::view('/create', 'workExperience')->name('create');
    Route::post('/store', [WorkExperienceController::class, 'store'])->name('store');
    Route::get('/show', [WorkExperienceController::class, 'show'])->name('show');
    Route::get('/update/{id?}', [WorkExperienceController::class, 'update'])->name('update');
    Route::put('/update_record/{id?}', [WorkExperienceController::class, 'update_record'])->name('update_record');
    Route::get('/delete/{id?}', [WorkExperienceController::class, 'delete'])->name('delete');
    Route::delete('/delete_record/{id?}', [WorkExperienceController::class, 'delete_record'])->name('delete_record');
});

Route::get('/profile', [UserController::class, 'getProfile'])->name('profile');