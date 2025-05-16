<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

/*** Route::get('/', function () {
    return view('welcome');
}); ***/

Route::view('/', 'welcome')->name('welcome');
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
Route::post('/users/register', [UserController::class, 'store'])->name('register.store');
Route::post('/users/login', [UserController::class, 'login'])->name('user.login');

Route::view('/company', 'company')->name('company');
Route::post('/company/register', [CompanyController::class, 'store'])->name('company.store');
Route::put('/company/udpdate/{id?}', [CompanyController::class, 'update'])->name('company.update');

Route::get('/workexperience/search', [CompanyController::class, 'search'])->name('workexperience.search');
Route::get('/workexperience', [CompanyController::class, 'show'])->name('workexperience.show');
Route::get('/workexperience/edit/{id?}', [CompanyController::class, 'edit'])->name('workexperience.edit');
Route::get('/workexperience/delete/{id?}', [CompanyController::class, 'delete'])->name('workexperience.delete');
Route::put('/workexperience/{id?}', [CompanyController::class, 'update'])->name('workexperience.update');
Route::delete('/workexperience/{id?}', [CompanyController::class, 'destroy'])->name('workexperience.destroy');

