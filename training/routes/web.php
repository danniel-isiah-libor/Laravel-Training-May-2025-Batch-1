<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client/{id?}', function(Request $request, ?string $id = null) {
    $html = "<ul>";
        $html .= "<li>Name: {$request->name}</li>";
        $html .= "<li>Birth date: {$request->birthdate}</li>";
        $html .= "<li>Email: {$request->email}</li>";
        $html .= "<li>ID: {$id}</li>";
    $html .= "</ul>";

    return $html;
})->name('client');