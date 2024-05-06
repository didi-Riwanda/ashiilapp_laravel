<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudyController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home | AshiilApp',
    ]);
});

Route::get('/features', function () {
    return view('features', [
        'title' => 'Features | AshiilApp',
    ]);
});

Route::get('/majelis', function () {

    $response = Http::get('http://superpay.biz.id:8000/api/article');
    $jsonData = $response->json();

    // dd($jsonData['data']);

    return view('study', [
        'title' => 'Majelis | AshiilApp',
        'data' => $jsonData['data'],
    ]);
});

Route::get('/majelis/{id}', function ($id) {
    $response = Http::get('http://superpay.biz.id:8000/api/article/' . $id);
    $jsonData = $response->json();
    // dd($jsonData);
    return view('study_detail', [
        'title' => 'Majelis | AshiilApp',
        'data' => $jsonData,
    ]);
});

Route::get('/donasi', function () {
    return view('donasi', [
        'title' => 'Donasi | AshiilApp',
    ]);
});

Route::get('/galery', function () {
    return view('review', [
        'title' => 'Galery | AshiilApp',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact | AshiilApp',
    ]);
});

Route::get('/privacy_policy', function () {
    return view('privacy_policy_ashiilapp', [
        'title' => 'Privacy Policy | AshiilApp',
    ]);
});

Route::get('/term_and_conditions', function () {
    return view('terms_and_conditions_ashiilapp', [
        'title' => 'Term and Conditions | AshiilApp',
    ]);
});

Route::get('/about_as', function () {
    return view('about', [
        'title' => 'Tentang Kami | AshiilApp',
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/studies/checkSlug', [StudyController::class, 'checkSlug']);
    Route::resource('/studies', StudyController::class);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
