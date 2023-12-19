<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get(
    '/contact/all/{id}', 
    'App\Http\Controllers\ContactController@showMessage'
)->name('contact-message');

Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data'); 
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');  // именнованное остлеживание урл, проверка через контроллер