<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');
