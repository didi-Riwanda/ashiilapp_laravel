<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home', [
        'title' => 'Home | AshiilApp',
    ]);
});

Route::get('/features', function(){
    return view('features', [
        'title' => 'Features | AshiilApp',
    ]);
});

Route::get('/majelis', function(){
    return view('study', [
        'title' => 'Majelis | AshiilApp',
    ]);
});

Route::get('/donasi', function(){
    return view('donasi', [
        'title' => 'Donasi | AshiilApp',
    ]);
});

Route::get('/galery', function(){
    return view('review', [
        'title' => 'Galery | AshiilApp',
    ]);
});

Route::get('/contact', function(){
    return view('contact', [
        'title' => 'Contact | AshiilApp',
    ]);
});

Route::get('/privacy_policy', function(){
    return view('privacy_policy_ashiilapp', [
        'title' => 'Privacy Policy | AshiilApp',
    ]);
});

Route::get('/term_and_conditions', function(){
    return view('terms_and_conditions_ashiilapp', [
        'title' => 'Term and Conditions | AshiilApp',
    ]);
});

Route::get('/about_as', function(){
    return view('about', [
        'title' => 'Tentang Kami | AshiilApp',
    ]);
});