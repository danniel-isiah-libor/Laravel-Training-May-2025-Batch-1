<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function(){
    return view('welcome');
}); 

Route::prefix('/users')
->name('user.')
->group(function(){
    Route::prefix('/admin')->group(function(){
        Route::get('/create', function(HttpRequest $request){
            dd($request);
            return 'Create user page';
        })->name('create');

        Route::get('/show/{id}', function($id=null){
            return 'Show user page - ' . $id;
        })->name('show');
    });

    Route::get('/list', function(){
        return 'User list';
    })->name('list');
});


Route::prefix('/client')
->name('client.')
->group(function(){
    Route::get('/user-info', function(HttpRequest $request){

    
        $name = $request->name;
        $birtdate = $request->birtdate;
        $email = $request->email;

         

        return "
        <script>alert('Alert ni bai!!')</script>
        <ul style='color: red;'>
            <li>Name: $name</li>
            <li>Birthdate: $birtdate</li>
            <li>Email: $email</li>
        </ul>";
    })->name('user-info');
});

