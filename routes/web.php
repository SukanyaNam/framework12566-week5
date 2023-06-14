<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// }); 

 Route::get('/', function () {
     return view('app');
})->name('home');

Route::prefix('pages')->group(function () {
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');
    
    Route::get('/contact', function () {
        return view('pages.contact');
    })->name('contact');
    
    Route::get('/post', function () {
        return view('pages.post');
    })->name('post');
    
    Route::get('/link', function () {
        return view('pages.link');
    })->name('link');
});