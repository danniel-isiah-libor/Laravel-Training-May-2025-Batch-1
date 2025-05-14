<?php

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/welcome',  function()
{return 'welcome';
});

Route::fallback(function(){
    return '404 Page Not Found';
});


    Route::prefix('/users')
            ->name('user.')
            ->group(function () {
                Route::prefix('/admin')->group(function () {
                    Route::get('/create', function(Request $request){
                    dd($request->all());
                return'Create User Page';
            })->name('create');
        });
  
   
    Route::get('/edit', function(){
    return'Edit User Page';
    })->name('edit');

 
    Route::get('/show/{id}', function($id= null){
    return'Show User Page-'. $id;
    })->name('show');

    Route::get('/lists', function(){
    return'User List Page';
    })->name('user.list');


});

Route::get('profile', function(Request $request){
    $name = $request->query('name');
    $birthdate = $request->birthdate;
    $email = $request->email;

    return "
    </ul>
    <li>Name: $name<li>
    <li>Birthdate: $birthdate<li>
    <li>Email: $email<li>
    </ul>
    ";
});
/**
 * 
 * 
 * 
 */