<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*** Route::get('/', function () {
    return view('welcome');
}); ***/

Route::view('/', 'welcome');
Route::fallback(function () {
    return '404 GOGOGOG';
});

Route::prefix('/users')
->name("users.")
->group(function () {
    Route::prefix('/admin')
        ->name("admin.")
        ->group(function () {
            Route::get('/create', function (Request $request) {
                return 'Create Users Page' . dd($request);
            })->name('create');
            Route::get('/edit', function () { return 'Edit Users Page'; })->name('edit');
            Route::get('/show/{id?}', function ($id=null) { return 'Show Users Page ' . $id; })->name('show');
    });

    //Route::get('{name?}', function ($name=null) { return 'Users Page ' . $name; })->where('name', '[A-Za-z]+');

    Route::get('profile/{name?}/{bday?}/{email?}', function ($name=null, $bday=null, $email=null) {
        $name = $name ?? '';
        $birthday = $bday ?? '';
        $emailAddress = $email ?? '';

        return "<h1>Users Page</h1>
        <ul>
            <li>Name: $name</li>
            <li>Birthday: $birthday</li>
            <li>Email: $emailAddress</li>
        </ul>";
    })->name('profile');
    
    Route::get('/profile2', [UserController::class, 'getProfile'])->name('profile2');
    Route::get('/profile3', [UserController::class, 'show'])->name('profile3');
});

Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');
Route::post('users/register', [UserController::class, 'store'])->name('register.store');